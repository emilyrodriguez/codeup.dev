'use strict';

    var student = {
        awesomeGrade: 80,
        name: null,
        subjects: [],
        calculateAverage: function () {
            var average = 0;
            this.subjects.forEach(function (subject) {
                average += subject.grade;
            });
            return average / this.subjects.length;
        },
        addSubject: function (name, grade) {
            var subject = {
                name: name,
                grade: grade
            };
            this.subjects.push(subject);
        },
        isAwesome: function () {
            return this.calculateAverage() > this.awesomeGrade;
        }
    }
    
    
    var continueButton = $('#add-grade');
    var calculateButton = $('#calculate-average');
    var saveButton = $("#save-name");
    
    var username = function (event) {
        var nameInput = $("#name");
        student.name = nameInput.val();
        $('#student-name').html(nameInput.val());
        continueButton.removeAttr("disabled");
        calculateButton.removeAttr("disabled");
    }
     
    function addContinue (event) {
        var subject = $("#subject").val();
        var grade = parseInt($("#grade").val()).toFixed(2);
        student.addSubject(subject, grade);
        var table = $('#grades');
        table.html('<tr><td>' + subject + '</td><td>' + grade + '</td></tr>' + table.html());
    }
    
    function calculateAverage (event) {
        addContinue();
        var studentAverage = student.calculateAverage();
        $("#student-average").html(studentAverage);

        if (student.isAwesome()) {
            $('#student-awesome').removeAttr('class', 'hidden');
        } else {
            $('#student-practiceif').removeAttr('class', 'hidden');
        }
        continueButton.attr('disabled', true);
        calculateButton.attr('disabled', true);
    }
    saveButton.on('click', username);
    continueButton.on('click', addContinue);
    calculateButton.on('click', calculateAverage);






