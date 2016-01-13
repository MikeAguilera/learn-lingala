// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var basicJSON = {
    "info": {
        "name":    "Past Tense",
        "main":    "<p> To Come - Koya</p>",
        "results": "<h5>Take another quiz</h5><p>Keep learning by taking more quizes.</p>",
        "level1":  "DRC Champion",
        "level2":  "DRC Heavyweight",
        "level3":  "DRC Lightweight",
        "level4":  "DRC Featherweight",
        "level5":  "DRC Amature"  // no comma here
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'I came'?",
            "a": [
                {"option": "Eyaki",    "correct": false},
                {"option": "Oyaki",     "correct": false},
                {"option": "Ayaki",  "correct": false},
                {"option": "Nayaki",     "correct": true} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Nayaki</em>.</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'You came' (singular)?",
            "a": [
                {"option": "Oyaki",   "correct": true},
                {"option": "Bayaki",   "correct": false},
                {"option": "Toyaki",  "correct": false},
                {"option": "Ayaki",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! That is correct. Keep it up!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Oyaki</em>.</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "What is the Subject Marker for 'He/She came'?",
            "a": [
                {"option": "Boyaki",  "correct": false},
                {"option": "Eyaki",  "correct": false},
                {"option": "Oyaki",  "correct": false},
                {"option": "Ayaki",  "correct": true} // no comma here
            ],
            "correct": "<p><span>Brilliant!</span> You're seriously a genius.</p>",
            "incorrect": "<p><span>Not Quite.</span> But nice try. The correct answer is <em>Ayaki</em>.</p>" // no comma here
        },
        { // Question 4
            "q": "What is the Subject Marker for 'It came'?",
            "a": [
                {"option": "Toyaki",    "correct": false},
                {"option": "Eyaki", "correct": true},
                {"option": "Ayaki",      "correct": false},
                {"option": "Oyaki",   "correct": false} // no comma here
            ],
            "correct": "<p>Correct!</p>",
            "incorrect": "<p><span>Fail.</span> Sorry. The correct answer is <em>Eyaki</em>.</p>" // no comma here
        },
        { // Question 5
            "q": "What is the Subject Marker for 'We came'?",
            "a": [
                {"option": "Boyaki",    "correct": false},
                {"option": "Bayaki",    "correct": false},
                {"option": "Eyaki",    "correct": false},
                {"option": "Toyaki",     "correct": true} // no comma here
            ],
            "correct": "<p><span>Great Job!</span> You must be very observant!</p>",
            "incorrect": "<p><span>Sorry.</span> The correct answer is <em>Toyaki</em>.</p>" // no comma here
        }, 
        { // Question 6 - Multiple Choice, Single True Answer
            "q": "What is the Subject Marker for 'You all came' (plural)?",
            "a": [
                {"option": "Oyaki",    "correct": false},
                {"option": "Bayaki",     "correct": false},
                {"option": "Boyaki",  "correct": true},
                {"option": "Eyaki",     "correct": false} // no comma here
            ],
            "correct": "<p><span>That's right!</span></p>",
            "incorrect": "<p><span>Uhh no.</span> Better luck next time. The correct answer is <em>Boyaki</em>.</p>" // no comma here
        },
        { // Question 7 - Multiple Choice, Multiple True Answers, Select Any
            "q": "What is the Subject Marker for 'They came'?",
            "a": [
                {"option": "Bayaki",   "correct": true},
                {"option": "Oyaki",   "correct": false},
                {"option": "Ayaki",  "correct": false},
                {"option": "Boyaki",   "correct": false} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>Nice!</span> Yes! You are amazing!</p>",
            "incorrect": "<p><span>Hmmm.</span> Nice try. The correct answer is <em>Bayaki</em>.</p>" // no comma here
        }
        
    ]
};
