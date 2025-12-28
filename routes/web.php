<?php

use App\Notifications\Frontend\InvoiceGenerated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Actions\Action;
use Spatie\WelcomeNotification\WelcomesNewUsers;

Auth::routes(['register' => true, 'login' => true, 'verify' => true]);
Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [\App\Http\Controllers\WelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [\App\Http\Controllers\WelcomeController::class, 'savePassword']);
});

Route::get('/media/stream', [App\Http\Controllers\SecurityController::class, 'streamOriginalMedia'])->name('media.stream');
Route::get('/media/preview', [App\Http\Controllers\SecurityController::class, 'streamPreviewMedia'])->name('media.preview');

// 301 Redirects for removed hire-related routes
Route::get('/book', function () {
    return redirect('https://autofusionrepairs.co.uk/book', 301);
});

Route::get('/book/mot', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot', 301);
});
Route::get('/book/mot/vrm', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/vrm', 301);
});
Route::get('/book/mot/vehicle-not-found', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/vehicle-not-found', 301);
});
Route::get('/book/mot/vehicle', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/vehicle', 301);
});
Route::get('/book/mot/describe', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/describe', 301);
});
Route::get('/book/mot/service', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/service', 301);
});
Route::get('/book/mot/mileage', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/mileage', 301);
});
Route::get('/book/mot/select-service', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/select-service', 301);
});
Route::get('/book/mot/mot', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/mot', 301);
});
Route::get('/book/mot/select-mot', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/select-mot', 301);
});
Route::get('/book/mot/select-branch', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/select-branch', 301);
});
Route::get('/book/mot/choose-trackers', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/choose-trackers', 301);
});
Route::get('/book/mot/choose-trackers-immobiliser', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/choose-trackers-immobiliser', 301);
});
Route::get('/book/mot/choose-trackers-subscription', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/choose-trackers-subscription', 301);
});
Route::get('/book/mot/choose-wheel-alignment', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/choose-wheel-alignment', 301);
});
Route::get('/book/mot/appointment', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/appointment', 301);
});
Route::get('/book/mot/you', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/you', 301);
});
Route::get('/book/mot/summary', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/summary', 301);
});
Route::get('/book/mot/confirmation', function () {
    return redirect('https://autofusionrepairs.co.uk/book/mot/confirmation', 301);
});

// Service page redirects
Route::get('/servicing', function () {
    return redirect('https://autofusionrepairs.co.uk/servicing', 301);
});
Route::get('/mot', function () {
    return redirect('https://autofusionrepairs.co.uk/mot', 301);
});
Route::get('/tyres', function () {
    return redirect('https://autofusionrepairs.co.uk/tyres', 301);
});
Route::get('/trackers', function () {
    return redirect('https://autofusionrepairs.co.uk/trackers', 301);
});
Route::get('/wheel-alignment', function () {
    return redirect('https://autofusionrepairs.co.uk/wheel-alignment', 301);
});




Route::group(['middleware' => 'web'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@getAboutPage']);
    Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@getContactPage']);
    Route::post('/contact', ['as' => 'contact.post', 'uses' => 'HomeController@postContactPage']);
    Route::get('/testimonials', ['as' => 'testimonials', 'uses' => 'HomeController@getTestimonialsPage']);

    //Servicing
    Route::get('/servicing', ['as' => 'servicing', 'uses' => 'HomeController@getServicingPage']);
    Route::get('/servicing/{manufacturer}', ['as' => 'servicing.single', 'uses' => 'HomeController@getIndividualServicePage']);

    //Wheel Alignment
    Route::get('/wheel-alignment', ['as' => 'wheel-alignment', 'uses' => 'HomeController@getWheelAlignmentPage']);
    Route::get('/wheel-alignment/{manufacturer}', ['as' => 'wheel-alignment.single', 'uses' => 'HomeController@getIndividualWheelAlignmentPage']);

    //Alloy Refurbishment
    Route::get('/alloy-refurbishment', ['as' => 'alloy-refurbishment', 'uses' => 'HomeController@getAlloyRefurbishment']);
    Route::post('/alloy-refurbishment', ['as' => 'alloy-refurbishment.post', 'uses' => 'HomeController@postAlloyRefurbishment']);

    //Vehicle Repairs
    Route::get('/vehicle-repairs', ['as' => 'vehicle-repairs', 'uses' => 'HomeController@getVehicleRepairs']);

    //MOT
    Route::get('/mot', ['as' => 'mot', 'uses' => 'HomeController@getMOTPage']);

    //Trackers
    Route::get('/trackers/', ['as' => 'trackers', 'uses' => 'HomeController@redirectTrackers']);
    Route::get('/trackers/vehicle-tracking-platform', ['as' => 'trackers.vehicle-tracking-platform', 'uses' => 'HomeController@getVehicleTrackingPlatformPage']);
    Route::get('/trackers/personal-vehicle-tracking', ['as' => 'trackers.personal-vehicle-tracking', 'uses' => 'HomeController@getPersonalVehicleTrackingPage']);
    Route::get('/trackers/fleet-trackers', ['as' => 'trackers.fleet-trackers', 'uses' => 'HomeController@getFleetTrackersPage']);
    Route::post('/trackers/fleet-trackers', ['as' => 'trackers.fleet-trackers.post', 'uses' => 'HomeController@postFleetTrackerPage']);
    Route::get('/trackers/vehicle-immobilisers', ['as' => 'trackers.vehicle-immobilisers', 'uses' => 'HomeController@getVehicleImmobilisersPage']);

    //Tyres
    Route::get('/tyres/', ['as' => 'tyres', 'uses' => 'HomeController@redirectTyres']);
    Route::get('/tyres/tyre-prices', ['as' => 'tyres.tyre-prices', 'uses' => 'HomeController@getTyrePricesPage']);
    Route::get('/tyres/tyre-safety', ['as' => 'tyres.tyre-safety', 'uses' => 'HomeController@getTyreSafetyPage']);
    Route::get('/tyres/budget-tyres', ['as' => 'tyres.budget-tyres', 'uses' => 'HomeController@getBudgetTyresPage']);
    Route::get('/tyres/winter-tyres', ['as' => 'tyres.winter-tyres', 'uses' => 'HomeController@getWinterTyresPage']);

    // VHC
    Route::get('/vhc/{vhcUUID}', ['as' => 'vhc.index', 'uses' => 'VHCController@getVHC']);
    Route::post('/vhc/{vhcUUID}', ['as' => 'vhc.index.post', 'uses' => 'VHCController@postVHC']);
    Route::get('/vhc/{vhcUUID}/report', ['as' => 'vhc.report', 'uses' => 'VHCController@getVHCReport']);

    // Car Hire
    Route::get('/hire', ['as' => 'hire', 'uses' => 'HireBookingController@hireIndex']);
    Route::get('/hire/cars', ['as' => 'hire.cars', 'uses' => 'HireBookingController@bookingIndex']);
    Route::get('/hire/cars/{slug}', ['uses' => 'HireBookingController@getCar'])->name('hire.cars.car');
    Route::post('/hire/cars/availability', ['as' => 'cars.availability', 'uses' => 'HireBookingController@checkAvailability']);

    Route::get('/hire/checkout', ['as' => 'hire.checkout', 'uses' => 'HireBookingController@getCheckoutIndex']);
    Route::post('/hire/checkout', ['as' => 'hire.checkout.post', 'uses' => 'HireBookingController@postCheckout']);
    // Route::get('/hire/checkout', ['as' => 'hire.checkout', 'uses' => 'HireBookingController@getCheckoutIndex'])->middleware('verified');
    // Route::post('/hire/checkout', ['as' => 'hire.checkout.post', 'uses' => 'HireBookingController@postCheckout'])->middleware('verified');

    // Location/Branch Pages
    Route::get('/locations', ['as' => 'locations.index', 'uses' => 'LocationController@index']);
    Route::get('/locations/{slug}', ['as' => 'locations.show', 'uses' => 'LocationController@show']);
    Route::get('/api/locations', ['as' => 'api.locations', 'uses' => 'LocationController@getLocations']);
    Route::get('/api/locations/{locationId}/cars', ['as' => 'api.locations.cars', 'uses' => 'LocationController@getLocationCars']);

    //	// Booking
    //    Route::get('/book',[ 'as' => 'book', 'uses' => 'GarageBookingController@bookingIndex']);
    //
    //    //MOT & SERVICING
    //    Route::get('/book/{serviceType}',[ 'as' => 'book.service', 'uses' => 'GarageBookingController@bookingRedirect']);
    //    Route::get('/book/{serviceType}/vrm',[ 'as' => 'book.service.vrm', 'uses' => 'GarageBookingController@getVRMSearch']);
    //    Route::post('/book/{serviceType}/vrm',[ 'as' => 'book.service.vrm.post', 'uses' => 'GarageBookingController@postVRMSearch']);
    //
    //    Route::get('/book/{serviceType}/vehicle-not-found',[ 'as' => 'book.service.vehicle-not-found', 'uses' => 'GarageBookingController@getVehicleNotFound']);
    //    Route::get('/book/{serviceType}/vehicle',[ 'as' => 'book.service.vehicle', 'uses' => 'GarageBookingController@getVehicle']);
    //
    //    Route::get('/book/{serviceType}/describe',[ 'as' => 'book.service.describe', 'uses' => 'GarageBookingController@getDescribe']);
    //    Route::post('/book/{serviceType}/describe',[ 'as' => 'book.service.describe.post', 'uses' => 'GarageBookingController@postDescribe']);
    //
    //    Route::get('/book/{serviceType}/service',[ 'as' => 'book.service.service', 'uses' => 'GarageBookingController@getMOTServiceRequired']);
    //    Route::post('/book/{serviceType}/service',[ 'as' => 'book.service.service.post', 'uses' => 'GarageBookingController@postMOTServiceRequired']);
    //
    //    Route::get('/book/{serviceType}/mileage',[ 'as' => 'book.service.mileage', 'uses' => 'GarageBookingController@getMileage']);
    //    Route::post('/book/{serviceType}/mileage',[ 'as' => 'book.service.mileage.post', 'uses' => 'GarageBookingController@postMileage']);
    //
    //    Route::get('/book/{serviceType}/select-service',[ 'as' => 'book.service.select-service', 'uses' => 'GarageBookingController@getMOTSelectService']);
    //    Route::post('/book/{serviceType}/select-service',[ 'as' => 'book.service.select-service.post', 'uses' => 'GarageBookingController@postMOTSelectService']);
    //
    //    Route::get('/book/{serviceType}/mot',[ 'as' => 'book.service.mot', 'uses' => 'GarageBookingController@getMOT']);
    //    Route::post('/book/{serviceType}/mot',[ 'as' => 'book.service.mot.post', 'uses' => 'GarageBookingController@postMOT']);
    //
    //    Route::get('/book/{serviceType}/select-mot',[ 'as' => 'book.service.select-mot', 'uses' => 'GarageBookingController@getSelectMOT']);
    //    Route::post('/book/{serviceType}/select-mot',[ 'as' => 'book.service.select-mot.post', 'uses' => 'GarageBookingController@postSelectMOT']);
    //
    //    Route::get('/book/{serviceType}/select-branch',[ 'as' => 'book.service.select-branch', 'uses' => 'GarageBookingController@getSelectBranch']);
    //    Route::post('/book/{serviceType}/select-branch',[ 'as' => 'book.service.select-branch.post', 'uses' => 'GarageBookingController@postSelectBranch']);
    //
    //    Route::get('/book/{serviceType}/choose-trackers',[ 'as' => 'book.service.trackers', 'uses' => 'GarageBookingController@getChooseTrackers']);
    //    Route::post('/book/{serviceType}/choose-trackers',[ 'as' => 'book.service.trackers.post', 'uses' => 'GarageBookingController@postChooseTrackers']);
    //
    //    Route::get('/book/{serviceType}/choose-trackers-immobiliser',[ 'as' => 'book.service.trackers.immobiliser', 'uses' => 'GarageBookingController@getChooseTrackerImmobiliser']);
    //    Route::post('/book/{serviceType}/choose-trackers-immobiliser',[ 'as' => 'book.service.trackers.immobiliser.post', 'uses' => 'GarageBookingController@postChooseTrackerImmobiliser']);
    //
    //    Route::get('/book/{serviceType}/choose-trackers-subscription',[ 'as' => 'book.service.trackers.subscription', 'uses' => 'GarageBookingController@getChooseTrackerSubscription']);
    //    Route::post('/book/{serviceType}/choose-trackers-subscription',[ 'as' => 'book.service.trackers.subscription.post', 'uses' => 'GarageBookingController@postChooseTrackerSubscription']);
    //
    //    Route::get('/book/{serviceType}/choose-wheel-alignment',[ 'as' => 'book.service.wheel-alignment', 'uses' => 'GarageBookingController@getChooseWheelAlignment']);
    //    Route::post('/book/{serviceType}/choose-wheel-alignment',[ 'as' => 'book.service.wheel-alignment.post', 'uses' => 'GarageBookingController@postChooseWheelAlignment']);
    //
    //    Route::get('/book/{serviceType}/appointment',[ 'as' => 'book.service.appointment', 'uses' => 'GarageBookingController@getAppointment']);
    //    Route::post('/book/{serviceType}/appointment',[ 'as' => 'book.service.appointment.post', 'uses' => 'GarageBookingController@postAppointment']);
    //
    //    Route::get('/book/{serviceType}/you',[ 'as' => 'book.service.you', 'uses' => 'GarageBookingController@getAboutYou']);
    //    Route::post('/book/{serviceType}/you',[ 'as' => 'book.service.you.post', 'uses' => 'GarageBookingController@postAboutYou']);
    //
    //    Route::get('/book/{serviceType}/summary',[ 'as' => 'book.service.summary', 'uses' => 'GarageBookingController@getSummary']);
    //    Route::post('/book/{serviceType}/summary',[ 'as' => 'book.service.summary.post', 'uses' => 'GarageBookingController@postSummary']);
    //
    //    Route::get('/book/{serviceType}/confirmation',[ 'as' => 'book.service.confirmation', 'uses' => 'GarageBookingController@getConfirmation']);

    Route::get('/account', ['as' => 'account', 'uses' => 'UserController@index'])->middleware('verified');

    Route::get('/account/edit', ['as' => 'account.edit', 'uses' => 'UserController@edit'])->middleware('verified');
    Route::post('/account/edit', ['as' => 'account.edit.post', 'uses' => 'UserController@postEdit'])->middleware('verified');

    Route::get('/account/bookings', ['as' => 'account.reservations', 'uses' => 'UserController@getReservations'])->middleware('verified');
    Route::get('/account/bookings/{booking}', ['as' => 'account.reservation', 'uses' => 'UserController@getSpecificReservation'])->middleware('verified');
    Route::get('/account/reservations/{ref}/pay', ['as' => 'account.reservation.pay', 'uses' => 'HireBookingController@getCompleteBooking'])->middleware('verified');
    Route::post('/account/reservations/{ref}/pay', ['as' => 'account.reservation.pay.post', 'uses' => 'HireBookingController@postCompleteBooking'])->middleware('verified');
    Route::get('/account/reservations/{ref}/verify', ['as' => 'account.reservation.verify', 'uses' => 'HireBookingController@getVerifyLicence'])->middleware('verified');

    Route::get('/account/subscriptions', ['as' => 'account.subscriptions', 'uses' => 'UserController@getSubscriptions'])->middleware('verified');
    Route::get('/account/subscriptions/{subscription}', ['as' => 'account.subscription', 'uses' => 'UserController@getSpecificSubscription'])->middleware('verified');
    Route::post('/account/subscriptions/{subscription}', ['as' => 'account.subscription.post', 'uses' => 'UserController@postSubscriptionRenewal'])->middleware('verified');

    Route::middleware('auth')->get('/set-password', [App\Http\Controllers\HomeController::class, 'getSetPassword'])->name('set-password');
    Route::middleware('auth')->post('/set-password', [App\Http\Controllers\HomeController::class, 'postSetPassword'])->name('set-password.post');

    Route::get('/account/documents', ['as' => 'account.documents', 'uses' => 'UserController@getDocuments'])->middleware('verified');
    Route::post('/account/documents/upload', 'UserController@documentsUpload')->name('account.documents.upload')->middleware('verified');

    Route::get('/estimates/{estimateUUID}/{estimateToken}', [\App\Http\Controllers\EstimatesController::class, 'getEstimate'])->name('estimate.get');
    Route::post('/estimates/{estimateUUID}/{estimateToken}/accept', [\App\Http\Controllers\EstimatesController::class, 'acceptEstimate'])->name('estimate.accept');
    Route::post('/estimates/{estimateUUID}/{estimateToken}/decline', [\App\Http\Controllers\EstimatesController::class, 'declineEstimate'])->name('estimate.decline');

    // Blog
    Route::get('learn', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('learn/category/{blog_category}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');
    Route::get('learn/{blog_post}', [\App\Http\Controllers\BlogController::class, 'post'])->name('blog.post');
});

// Security
Route::get('/secure_files/{file_name}', [App\Http\Controllers\SecurityController::class, 'dumpDownload'])->withoutMiddleware([\App\Http\Middleware\HSTS::class])->name('security.dumpDownload');

// Banking - GoCardless
Route::get('/backend/banking/connect', [App\Http\Controllers\GoCardlessController::class, 'connectBank'])->name('go-cardless.connect');
Route::get('/backend/banking/disconnect', [App\Http\Controllers\GoCardlessController::class, 'disconnectBank'])->name('go-cardless.disconnect');
Route::get('/backend/banking/institutions', [App\Http\Controllers\GoCardlessController::class, 'getInstitutions'])->name('go-cardless.institutions');
Route::get('/backend/banking/callback', [App\Http\Controllers\GoCardlessController::class, 'callback'])->name('go-cardless.callback');
Route::get('/backend/banking/test', [App\Http\Controllers\GoCardlessController::class, 'fetchTransactions'])->name('go-cardless.test');

Route::get('/templates/generateInvoice/garage/{invoiceId}', function (Request $request, $invoiceId) {
    $tempFilename = 'temp/invoice_data_' . $invoiceId . '.json';
    $data = json_decode(Storage::get($tempFilename), true);
    Storage::delete($tempFilename);
    return view('templates.invoices.garage', ['data' => $data]);
});

Route::get('/templates/generateInvoice/hire/{invoiceId}', function (Request $request, $invoiceId) {
    $tempFilename = 'temp/invoice_data_' . $invoiceId . '.json';
    $data = json_decode(Storage::get($tempFilename), true);
    Storage::delete($tempFilename);
    return view('templates.invoices.hire', ['data' => $data]);
});

Route::get('/templates/generateJobSheet/{jobSheetId}', function (Request $request, $jobSheetId) {
    $tempFilename = 'temp/job_sheet_data_' . $jobSheetId . '.json';
    $data = json_decode(Storage::get($tempFilename), true);
    Storage::delete($tempFilename);
    return view('templates.job-sheet', ['data' => $data]);
});

Route::get('/templates/generateEstimate/{estimateId}', function (Request $request, $estimateId) {
    $tempFilename = 'temp/estimate_data_' . $estimateId . '.json';
    $data = json_decode(Storage::get($tempFilename), true);
    Storage::delete($tempFilename);
    return view('templates.estimates.garage-estimate', ['data' => $data]);
});

Route::get('/tester', function () {
    $estimate = \App\Estimate::find(3);
    \App\Estimate::generateEstimate(null, true, 3);
    return true;
    //    $garageReservations = \App\GarageReservation::get();
    //    foreach($garageReservations as $garageReservation)
    //    {
    //        \App\GarageReservation::updateTotals($garageReservation);
    //
    //    }
    //    $hireReservations = \App\HireReservation::get();
    //    foreach($hireReservations as $reservation)
    //    {
    $reservation = \App\HireReservation::find(401);
    \App\HireReservation::updateTotals($reservation);
    $reservation->updatePaymentStatus();
    //    }
    //    $invoice = \App\Invoice::find(612);
    //    $invoice->updateBalance();
    //    $invoice->client?->notify(new InvoiceGenerated($invoice));

    //   \App\InvoicePayment::where('invoice_id', 606)->delete();
    //   $booking = \App\GarageReservation::find(1582);
    //   $genInvoice = \App\Invoice::generateInvoice('garage', $booking, true, 1, false, now(), true);
    //   $responseData = json_decode($genInvoice->getContent(), true);
    //
    //   $invoice = \App\Invoice::find(606);
    //   $invoice->updateBalance();
    //   return $responseData;

    //   $booking = \App\HireReservation::find(363);
    //   \App\HireReservation::updateTotals($booking);
    //   $booking->updatePaymentStatus();
    //   $genInvoice = \App\Invoice::generateInvoice('hire', $booking, false, 1, false, now(), true);
    //   $responseData = json_decode($genInvoice->getContent(), true);
    //   return $responseData;
});


Route::get('/v2/home', function () {
    return view('v2.home');
});

Route::get('/v2/about', function () {
    return view('v2.about');
});

Route::get('/v2/brand-adudi', function () {
    return view('v2.brand-adudi');
});
Route::get('/v2/brand', function () {
    return view('v2.brand');
});
Route::get('/v2/car-hire', function () {
    return view('v2.car-hire');
});
Route::get('/v2/careers', function () {
    return view('v2.careers');
});
Route::get('/v2/city-details', function () {
    return view('v2.city-details');
});
Route::get('/v2/city-landing', function () {
    return view('v2.city-landing');
});
Route::get('/v2/complaints', function () {
    return view('v2.complaints');
});
Route::get('/v2/contact-us', function () {
    return view('v2.contact-us');
});
Route::get('/v2/dashboard-booking-details', function () {
    return view('v2.dashboard-booking-details');
});
Route::get('/v2/dashboard-booking-tabs', function () {
    return view('v2.dashboard-booking-tabs');
});
Route::get('/v2/dashboard-bookings', function () {
    return view('v2.dashboard-bookings');
});
Route::get('/v2/dashboard-empty-bookings', function () {
    return view('v2.dashboard-empty-bookings');
});

// Clear application cache:
Route::get('clear-caches', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
});
