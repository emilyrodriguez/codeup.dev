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
    
    
    var continueButton = document.getElementById("add-grade");
    var calculateButton = document.getElementById("calculate-average");
    var saveButton = document.getElementById("save-name");
    
    var username = function (event) {
        var nameInput = document.getElementById("name");
        student.name = nameInput.value;
        document.getElementById("student-name").innerText = nameInput.value;
        continueButton.removeAttribute("disabled");
        calculateButton.removeAttribute("disabled");
    }
     
    function addContinue (event) {
        var subject = document.getElementById("subject").value;
        var grade = parseInt(document.getElementById("grade").value);
        student.addSubject(subject, grade);
        
    
        var table = document.getElementById('grades');
        table.innerHTML = '<tr><td>' + subject + '</td><td>' + grade + '</td></tr>' + table.    innerHTML;
    }
    
    function calculateAverage (event) {
        addContinue();
        var studentAverage = student.calculateAverage();
        document.getElementById("student-average").innerText = studentAverage;
        
        if (student.isAwesome()) {
            document.getElementById('student-awesome').removeAttribute('class');
            document.getElementById('student-awesome').removeAttribute('class', 'hidden');
        } else {
            document.getElementById('student-practiceif').removeAttribute('class');
            document.getElementById('student-practiceif').removeAttribute('class', 'hidden');
        }
         continueButton.setAttribute('disabled', true);
        calculateButton.setAttribute('disabled', true);
    }
    
    saveButton.addEventListener('click', username);
    continueButton.addEventListener('click', addContinue);
    calculateButton.addEventListener('click', calculateAverage);







