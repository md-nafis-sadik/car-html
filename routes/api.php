<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Booking API
Route::get('/book/appointments/availability',[ 'as' => 'book.api.availability', 'uses' => 'InternalAPI\BookingController@appointmentAvailabilityHandler']);
Route::get('/book/appointments/dropoffTimes',[ 'as' => 'book.api.dropofftimes', 'uses' => 'InternalAPI\BookingController@dropoffTimesAvailabilityHandler']);

Route::get('/book/paf', '\App\Http\Controllers\InternalAPI\BookingController@postcodeFinder')->name('book.paf');

Route::post('/book/payments/stripe/intent', [App\Http\Controllers\InternalAPI\BookingController::class, 'createStripePaymentIntent'])->name('book.payments.stripe.intent');
Route::post('/book/payments/payment_assist/pre_approval', [App\Http\Controllers\InternalAPI\BookingController::class, 'checkPaymentAssistPreApproval'])->name('book.payments.payment_assist.intent');
Route::post('/book/payments/payment_assist/begin', [App\Http\Controllers\InternalAPI\BookingController::class, 'submitApplicationPaymentAssist'])->name('book.payments.payment_assist.begin');
Route::post('/book/payments/payment_assist/status', [App\Http\Controllers\InternalAPI\BookingController::class, 'checkPaymentAssistStatus'])->name('book.payments.payment_assist.status');


// Email Validation
Route::post('/auth/validation/email', [App\Http\Controllers\InternalAPI\AuthController::class, 'validateEmail'])->name('validateUserEmailFrontend');

//Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
//    Route::get('welcome/{user}', [\App\Http\Controllers\WelcomeController::class, 'showWelcomeForm'])->name('welcome');
//    Route::post('welcome/{user}', [\App\Http\Controllers\WelcomeController::class, 'savePassword']);
//});


//  'middleware' => 'auth:api'
Route::prefix('v1')->group(function() {
	/** Public Validation Routes */
	Route::post('auth/validation/email', [App\Http\Controllers\API\AuthController::class, 'validateEmail'])->name('validateUserEmail');
	Route::get('/', [App\Http\Controllers\API\APIController::class, 'getIndex'])->name('api.index');
	Route::get('platform/app/version', [App\Http\Controllers\API\PlatformController::class, 'getAppVersion']);
	Route::get('platform/settings', [App\Http\Controllers\API\PlatformController::class, 'getPlatformSettings']);

	/** Authentication */
	Route::post('auth/login', [App\Http\Controllers\API\AuthController::class, 'tokenLogin'])->name('api.auth.login');
	Route::post('auth/register', [App\Http\Controllers\API\AuthController::class, 'registerUser'])->name('api.auth.register');
	Route::middleware('auth:sanctum')->post('auth/logout', [App\Http\Controllers\API\AuthController::class, 'tokenLogout']);

	/** User */
	Route::middleware('auth:sanctum')->get('user/profile', [App\Http\Controllers\API\UserController::class, 'getProfile']);
	Route::middleware('auth:sanctum')->put('user/profile', [App\Http\Controllers\API\UserController::class, 'putProfile']);

	Route::middleware('auth:sanctum')->get('user/documents', [App\Http\Controllers\API\UserController::class, 'getDocuments']);
	Route::middleware('auth:sanctum')->post('user/documents/upload', [App\Http\Controllers\API\UserController::class, 'uploadDocument']);

    Route::middleware('auth:sanctum')->get('user/subscriptions', [App\Http\Controllers\API\UserController::class, 'getSubscriptions']);
    Route::middleware('auth:sanctum')->get('user/subscriptions/{subscription}', [App\Http\Controllers\API\UserController::class, 'getOneSubscription']);
    Route::middleware('auth:sanctum')->post('user/subscriptions/{subscription}/renew', [App\Http\Controllers\API\UserController::class, 'postSubscriptionRenewal']);

    Route::middleware('auth:sanctum')->get('user/bookings', [App\Http\Controllers\API\UserController::class, 'getBookings']);
    Route::middleware('auth:sanctum')->get('user/bookings/{bookingReference}', [App\Http\Controllers\API\UserController::class, 'getSpecificBooking']);

    Route::middleware('auth:sanctum')->get('user/security/token', [App\Http\Controllers\API\UserController::class, 'generateSecurityToken']);
	Route::middleware('auth:sanctum')->post('user/password/change', [App\Http\Controllers\API\UserController::class, 'changePassword']);
	Route::middleware('auth:sanctum')->post('user/password/set', [App\Http\Controllers\API\UserController::class, 'setFirstTimePassword']);

    /** Book */
    Route::post('book/hire/search', [App\Http\Controllers\API\HireBookingController::class, 'postHireSearch']);
    Route::get('book/hire/locations', [App\Http\Controllers\API\HireBookingController::class, 'getLocations']);
    Route::post('book/hire/verify-licence', [App\Http\Controllers\API\HireBookingController::class, 'postHireLicenceVerification']);
    Route::middleware('auth:sanctum')->post('book/hire/submit', [App\Http\Controllers\API\HireBookingController::class, 'postHireOrder']);
    Route::get('book/hire/{carID}', [App\Http\Controllers\API\HireBookingController::class, 'getCar']);
    Route::get('book/hire/{carID}/images', [App\Http\Controllers\API\HireBookingController::class, 'getCarImages']);

    Route::get('book/garage/services', [App\Http\Controllers\API\GarageBookingController::class, 'getGarageServices']);
    Route::get('book/garage/{serviceType}/vrm', [App\Http\Controllers\API\GarageBookingController::class, 'getVRMSearch']);
    Route::get('book/garage/{serviceType}/products', [App\Http\Controllers\API\GarageBookingController::class, 'getGarageProducts']);
    Route::get('book/garage/{serviceType}/branch', [App\Http\Controllers\API\GarageBookingController::class, 'getGarageBranch']);
    Route::get('book/garage/{serviceType}/availability', [App\Http\Controllers\API\GarageBookingController::class, 'findAppointmentDatesTimes']);

    Route::middleware('auth:sanctum')->post('book/garage/{serviceType}/submit', [App\Http\Controllers\API\GarageBookingController::class, 'postGarageOrder']);


    Route::post('book/coupons/validate', [App\Http\Controllers\API\BookingsController::class, 'validateCoupon']);
//    Route::middleware('auth:sanctum')->post('book/coupons/redeem', [App\Http\Controllers\API\BookingsController::class, 'redeemCoupon']);

    Route::middleware('auth:sanctum')->post('book/payments/stripe/intent', [App\Http\Controllers\API\BookingsController::class, 'getPaymentIntent']);

    /** Push Notifications  */
	Route::middleware('auth:sanctum')->get('push/test', [App\Http\Controllers\API\PushNotificationsController::class, 'testPush']);
	Route::middleware('auth:sanctum')->post('push/register', [App\Http\Controllers\API\PushNotificationsController::class, 'registerPush']);
});
