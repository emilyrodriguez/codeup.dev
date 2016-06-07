'use strict';
// Exercise 1
// Refactor this code to interact with the user, use prompt, alert,
// and confirm where needed. Here are some more rules:
// * Prompt the user for her name, and the name of the subject
// * Use at least one object. This object should have at least one
// * function.
// * Use at least one array (it must be part of the object)
// * Make it work for a variable number of grades.

		(function() {
		
		var sumGrades = 0;
		
			var student = {
				name: '',
		
				subjects: [],
				addToSubjectsArray: function (subject) {
					this.subjects.push(subject);
					return this.subjects;
				},
		
				grades: [],
				addToGradesArray: function (grade) {
					this.grades.push(grade);
					return this.grades;
				}, 
		
				averagedGrades: function (grade, index) {
					sumGrades = sumGrades + grades[index];
					var average = grades / numberOfGrades;
					alert(name + ", your average is " + average);
				}
			};
		
			student.name = prompt('Please enter your name.');
			
			do {
			var subjectMessage = prompt('Please enter the subject:');
			student.addToSubjectsArray(subjectMessage);
			var gradeMessage = prompt('Please enter a grade:');
			student.addToGradesArray(gradeMessage);
			var moreGrades = confirm('Do you have more grades?');
			} while (moreGrades);
		
			
		
		})();