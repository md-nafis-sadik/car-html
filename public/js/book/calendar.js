const calendar = () => {
    "use strict";

    // ReSharper disable NativeTypePrototypeExtending
    Date.prototype.toLocalISOString = function () {
        const tzOffset = this.getTimezoneOffset() * 60000; // offset in milliseconds
        const localIsoTime = (new Date(this - tzOffset)).toISOString().slice(0, -1);
        return localIsoTime;
    }
    Date.prototype.toLocalISODateString = function () {
        // will return YYYY-MM-DD
        return this.toLocalISOString().substring(0, 10);
    }
    Date.prototype.getStartOfMonthDate = function (monthsToAdd) {
        if (monthsToAdd && typeof monthsToAdd === "number") {
            return new Date(this.getFullYear(), this.getMonth() + monthsToAdd, 1);
        }
        return new Date(this.getFullYear(), this.getMonth(), 1);
    }
    // ReSharper restore NativeTypePrototypeExtending

    const startDayOfWeek = 1; // JS day of week index, 1 = Monday
    const monthNames = [
        "January", "February", "March",
        "April", "May", "June",
        "July", "August", "September",
        "October", "November", "December"
    ];

    let options = {
        onDateSelected: function (dateObj, isInitialLoad) { },
        onMonthChanged: function (dateStr, onFinishedLoading) { },
        setInitialDate: function (dateObj) { },
        initialSelectedDate: null,
        monthsAvailableForward: null,
        monthsAvailableBackward: null
    };

    const onFinishedLoading = function () {
        addDateClickEventHandler();
        setLoading(false);
    };

    const tableCellDateOutsideThisMonth =
        day => `<td class="ch-datepicker__date ch-datepicker__date--unavailable">${day}</td>`;
    const tableCellDateInsideThisMonth = (date, day) => {
        var dte = new Date(date);
        dte.setDate(day);
        return `<td class="ch-datepicker__date"><time datetime="${dte.toLocalISODateString()}">${day}</time></td>`;
    }

    let monthPrevBtn = document.querySelector("button.ch-datepicker__month__previous");
    let monthNextBtn = document.querySelector("button.ch-datepicker__month__next");

    let date = new Date();

    function renderCalendar() {
        var now = new Date();

        const lastDateOfPrevMonth = new Date(date.getFullYear(), date.getMonth(), 0);
        const lastDayOfPrevMonth = lastDateOfPrevMonth.getDate();

        const firstDateOfMonth = date.getStartOfMonthDate();
        const firstDayIndexOfMonth = firstDateOfMonth.getDay();
        const lastDateOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);
        const lastDayOfMonth = lastDateOfMonth.getDate();
        const lastDayIndexOfMonth = lastDateOfMonth.getDay();

        const numDaysFromLastMonth = (6 + firstDayIndexOfMonth - (startDayOfWeek - 1)) % 7;
        const numDaysFromNextMonth = (7 - lastDayIndexOfMonth) % 7;
        const numDaysInCalendar = numDaysFromLastMonth + lastDayOfMonth + numDaysFromNextMonth;
        const numWeeksInCalendar = Math.ceil(numDaysInCalendar / 7);

        document
            .querySelector("span.ch-datepicker__month__name")
            .innerHTML = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;

        let daysAdded = 0;

        // output the last days from the previous month to the first week of the calendar
        let tbodyContent = "<tr>";
        for (let day = lastDayOfPrevMonth - (numDaysFromLastMonth - 1); day <= lastDayOfPrevMonth; day++) {
            tbodyContent += tableCellDateOutsideThisMonth(day);
            daysAdded++;
        }
        // output the first days of the current month to the remaining days in the first week
        let day = 1;
        for (; daysAdded < 7; daysAdded++, day++) {
            tbodyContent += tableCellDateInsideThisMonth(date, day);
        }
        tbodyContent += "</tr>";

        // main, full weeks of calendar, starting 1 week in
        for (let week = 1; week < numWeeksInCalendar - 1; week++) {
            tbodyContent += "<tr>";

            for (let dayOfWeek = 0; dayOfWeek < 7; dayOfWeek++, day++) {
                tbodyContent += tableCellDateInsideThisMonth(date, day);
            }

            tbodyContent += "</tr>";
        }

        // output last week of calendar, remaining days from current month
        tbodyContent += "<tr>";
        for (; day <= lastDayOfMonth; day++) {
            tbodyContent += tableCellDateInsideThisMonth(date, day);
        }
        // output the first days of the next month to the remaining days in the last week
        for (let day = 1; day <= numDaysFromNextMonth; day++) {
            tbodyContent += tableCellDateOutsideThisMonth(day);
        }
        tbodyContent += "</tr>";

        document.querySelector(".ch-datepicker__calendar tbody").innerHTML = tbodyContent;

        monthPrevBtn.style.visibility = "visible";
        if (Number.isInteger(options.monthsAvailableBackward)) {
            var min = new Date(now.getFullYear(), now.getMonth(), 1);
            min = min.getStartOfMonthDate(-options.monthsAvailableBackward);
            if (firstDateOfMonth <= min) {
                monthPrevBtn.style.visibility = "hidden";
            }
        }
        monthNextBtn.style.visibility = "visible";
        if (Number.isInteger(options.monthsAvailableForward)) {
            var max = new Date(now.getFullYear(), now.getMonth(), 1);
            max = max.getStartOfMonthDate(options.monthsAvailableForward);
            if (firstDateOfMonth >= max) {
                monthNextBtn.style.visibility = "hidden";
            }
        }
    }

    function addDateClickEventHandler() {
        document
            .querySelectorAll("td.ch-datepicker__date:not(.ch-datepicker__date--unavailable)")
            .forEach(function (item) {
                item.addEventListener("click",
                    function (e) {
                        const prevSelected =
                            document.querySelector("td.ch-datepicker__date.ch-datepicker__date--selected");
                        if (prevSelected) {
                            prevSelected.classList.remove("ch-datepicker__date--selected");
                        }

                        // ensure we have the td element as there is a time nested within the td
                        // which will more than likely be the thing that has been clicked
                        var element = e.target;
                        if (element.tagName.toLowerCase() !== "td") {
                            element = element.parentNode;
                        }

                        element.classList.add("ch-datepicker__date--selected");

                        options.onDateSelected(new Date(element.childNodes[0].dateTime));
                    });
            });
    }

    function setLoading(loading) {
        const loadingElem = document.querySelector(".loader-container");
        const calendarElem = document.querySelector(".ch-datepicker__calendar");

        loadingElem.style.display = loading ? "table" : "none";
        calendarElem.style.display = loading ? "none" : "table";
    }

    monthPrevBtn.addEventListener("click",
        function () {
            setLoading(true);
            date = date.getStartOfMonthDate(-1);
            renderCalendar();
            options.onMonthChanged(date.getStartOfMonthDate().toLocalISODateString(), onFinishedLoading);
        });
    monthNextBtn.addEventListener("click",
        function () {
            setLoading(true);
            date = date.getStartOfMonthDate(1);
            renderCalendar();
            options.onMonthChanged(date.getStartOfMonthDate().toLocalISODateString(), onFinishedLoading);
        });

    return {
        setUnavailable: (unavailableDate) => {
            document
                .querySelector(`time[datetime="${unavailableDate.toLocalISODateString()}"]`)
                .parentNode.classList.add("ch-datepicker__date--unavailable");
        },
        init: (opts) => {
            setLoading(true);

            options = Object.assign(options, opts);

            date = options.setInitialDate(date);

            if (options.initialSelectedDate) {
                date = options.initialSelectedDate;
            }

            renderCalendar();

            options.onMonthChanged(date.getStartOfMonthDate().toLocalISODateString(), onFinishedLoading);

            if (options.initialSelectedDate) {
                document
                    .querySelector(`time[datetime="${date.toLocalISODateString()}"]`)
                    .parentNode.classList.add("ch-datepicker__date--selected");
                const isInitialLoad = true;
                options.onDateSelected(date, isInitialLoad);
            }
        }
    };
}