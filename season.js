var listCountries = ['leonard', 'tyler', 'james', 'William', 'Italy', 'John', 'Jacob', 'Joshua', 'Michael', 'Jackson', 'Ryan', 'Ethan', 'Spain', 'Jayden', 'Mason', 'Noah', 'Elijah', 'Noah', 'Gavin', 'Jackson', 'Andrew', 'Joshua', 'Benjamin', 'Logan', 'Samuel', 'Isaac', 'Anthony', 'Nicholas', 'Adrian', 'Emily', 'Isabella', 'Hannah', 'Olivia', 'Samantha', 'Ava', 'Emily', 'Jose','Elijah','Tyler'];
var listPlans = ['$2000 via paypal','$1000 via bitcoin','$50000 via cashapp','$15000 via bank transfer','$10000','$100000','$20000','$1500','$30000','$40000','$1200','$60000','$3400', '$7000', '$25000', '$25000', '$35000', '$5000','$7000','$45000','$3500','$5000','$12500','$9500'];
interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
var run = setInterval(request, interval);

function request() {
clearInterval(run);
interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
var country = listCountries[Math.floor(Math.random() * listCountries.length)];
var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
var msg = 'new payment sent to <b>' + country + '</b> - <a href="javascript:void(0);" onclick="javascript:void(0);"> '+ plan + '.</a>';
$(".mgm .txt").html(msg);
$(".mgm").stop(true).fadeIn(300);
window.setTimeout(function() {
    $(".mgm").stop(true).fadeOut(300);
}, 6000);
run = setInterval(request, interval);
}