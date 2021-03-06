angular.module('journals')
		.directive('addJournalEntryBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-journal-entry-btn-function type='button' class='btn btn-info btn-sm'>add row</button>"
			}
		})
		.directive('addJournalEntryBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('journal-entry-table')).append($compile(
							"<tr>"+
								"<td><input type='text' class='form-control'></td>"+
								"<td><input type='text' class='form-control'></td>"+
								"<td><input type='text' class='form-control'></td>"+
								"<td><input type='text' class='form-control'></td>"+
								"<td><button ng-click='delete_row($event)' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})