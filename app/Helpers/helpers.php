<?php
include_once 'messages.php';
if (!function_exists('franchiseeId')) {
    function franchiseeId($id){
        return  "IND$id";
    }
}
if (!function_exists('dashboardUrl')) {
    function dashboardUrl(){
        return  route('franchisee.dashboard');
    }
}
if (!function_exists('labName')) {
    function labName(){
        return  "HY PATHO LAB";
    }
}
if (!function_exists('bankAccountDetails')) {
    function bankAccountDetails(){
        return  "<h6 style='font-size:12px'>BANK DETAILS : HYPATHO LAB PVT
        LTD,<br>A/C No - 922020022206506, <br>IFSC - UTIB0000644,
        <br>AXIS BANK, BRANCH - NARAINA, NEW DELHI</h6>";
    }
}
if (!function_exists('customerCareNumber')) {
    function customerCareNumber(){
        return  "7718962488";
    }
}
if (!function_exists('helpDeskNumber')) {
    function helpDeskNumber(){
        return  "9654637718";
    }
}
function setActiveRoute($mainRoute, $subRoutes = [])
{
    $routesToCheck = empty($subRoutes) ? [$mainRoute] : array_merge([$mainRoute], $subRoutes);
    foreach ($routesToCheck as $routeName) {
        if (request()->routeIs($routeName)) {
            return 'active';
        }
    }
    return '';
}
