// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Subject Markers Pt. 1",
        "main":    "<p> Present Tense</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker for 'I'?",
            "a": [
                {"option": "E",    "correct": false},
                {"option": "O",     "correct": false},
                {"option": "A",  "correct": false},
                {"option": "Na",     "correct": true} // no comma here
            ],
            "correct": "<p><span>That's right!</span><em> Na</em> is the Subject Marker for 'I'.</p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Na</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker for 'You' (singular)?",
            "a": [
                {"option": "O",   "correct": true},
                {"option": "Ba",   "correct": false},
                {"option": "To",  "correct": false},
                {"option": "A",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>O</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Lingala Subject Marker for 'He/She'?",
            "a": [
                {"option": "Ba",  "correct": false},
                {"option": "E",  "correct": false},
                {"option": "O",  "correct": false},
                {"option": "A",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>A</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Lingala Subject Marker for 'It'?",
            "a": [
                {"option": "To",    "correct": false},
                {"option": "E", "correct": true},
                {"option": "A",      "correct": false},
                {"option": "O",   "correct": false} // no comma here
            ],
            "correct": "<p><span>Goodness!</span> I didn't actually expect you to know that! Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>E</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Lingala Subject Marker for 'We'?",
            "a": [
                {"option": "Bo",    "correct": false},
                {"option": "Ba",    "correct": false},
                {"option": "E",    "correct": false},
                {"option": "To",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>To</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Lingala Subject Marker for 'You' (plural)?",
            "a": [
                {"option": "O",    "correct": false},
                {"option": "Ba",     "correct": false},
                {"option": "Bo",  "correct": true},
                {"option": "E",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Bo</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Lingala Subject Marker for 'They'?",
            "a": [
                {"option": "Ba",   "correct": true},
                {"option": "O",   "correct": false},
                {"option": "A",  "correct": false},
                {"option": "Bo",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Ba</em>.</p>" // no comma here
        }
        
    ]
};
