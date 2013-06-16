'use strict';


function apiumMainPageController($scope)
{
    $scope.var = 'I am just a jealous var';

    $scope.screenOnFront = 0;
    $scope.goWithSabrosura = function(steps){
        $scope.screenOnFront = steps;

    };

    $scope.contactForm = {
        name: "",
        mail: "",
        phone: "",
        find: "",
        message: ""
    };
    $scope.findSources = [
        "Searching on Internet",
        "Someone's recommendation",
        "Through Linkedin",
        "Through Apium's blog",
        "Through Apium's twitter",
        "Others"
    ]

    $scope.submitContactForm = function(){
        return $scope.var;
    }
}