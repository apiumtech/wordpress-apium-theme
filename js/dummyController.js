'use strict';


function apiumMainPageController($scope)
{
    $scope.var = 'I am just a jealous var';

    $scope.screenOnFront = 0;
    $scope.goWithSabrosura = function(steps){
        $scope.screenOnFront = steps;

    };
    $scope.dummyMethod = function(){
        return $scope.var;
    }
}