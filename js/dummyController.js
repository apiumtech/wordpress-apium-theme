'use strict';


function apiumMainPageController($scope)
{
    $scope.var = 'I am just a jealous var';
    $scope.dummyMethod = function(){
        return $scope.var;
    }
}