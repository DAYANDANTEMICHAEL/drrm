// DOM Elements
// import axios from 'axios';

// Define userId at the top of the file


const scenario1 = document.getElementById("scenario-1");
const scenario2 = document.getElementById("scenario-2");
const scenario3 = document.getElementById("scenario-3");
const scenario4 = document.getElementById("scenario-4");
const scenario5= document.getElementById("scenario-5");
const scenario6= document.getElementById("scenario-6");
const scenario7= document.getElementById("scenario-7");
const scenario8 = document.getElementById("scenario-8"); 





const timerElement = document.getElementById("timer");
const timerElement2 = document.getElementById("timer-2");
const timerElement3 = document.getElementById("timer-3");
const timerElement4 = document.getElementById("timer-4"); // New timer for scenario 4
const timerElement5 = document.getElementById("timer-5");
const timerElement6 = document.getElementById("timer-6");
const timerElement7 = document.getElementById("timer-7");
const timerElement8 = document.getElementById("timer-8");
const correctAnswer1 = 3; // Correct answer for scenario 1 (Signal 3)
const correctAnswer2 = "correct"; // Correct answer for scenario 2
const correctAnswer3 = "correct"; // Correct answer for scenario 3
const correctAnswer4 = "correct"; // Correct answer for scenario 4 (Move to a stronger building)
const correctAnswer5 = "correct"; // Correct answer for scenario 5
const correctAnswer6 = "correct"; // Correct answer for scenario 6
const correctAnswer7 = "correct"; // Correct answer for scenario 7
const correctAnswer8 = "correct"; // Correct answer for scenario 8
let timerStart = new Date();
let timerInterval;
let elapsedTime = 0;  // Track elapsed time globally
let scenario1Attempts = 0;
let scenario2Attempts = 0;
let scenario3Attempts = 0;
let scenario4Attempts = 0;
let scenario5Attempts = 0;
let scenario6Attempts = 0;
let scenario7Attempts = 0;
let scenario8Attempts = 0;

function getHintMessage(scenario) {
    const hints = {
        "Scenario 4": "Volcanic activity can be unpredictable, and staying in the danger zone puts you at serious risk.",
        "Scenario 3": "Avoid areas with glass or heavy equipment.",
        "Scenario 5": "Emergency go bags are often kept in a central, easy-to-access location where they can be grabbed quickly during an evacuation.",
        "Scenario 6": "Ashfall can cause health hazards, so protect your breathing and act promptly to reach safety.",
        "Scenario 1": "This mask is commonly used in medical settings and helps protect against particles in the air.",
        "Scenario 7": "It is not recommended to attend injuries without the supervision of the authorities.",
        "Scenario 2": "This advice emphasizes waiting for official confirmation before leaving safety, typically during a hazardous or emergency situation.",
        "Scenario 8": "When dealing with volcanic ash, it's important to protect your health first and avoid exposure to harmful particles until the situation is safe."
    };

    return hints[scenario];
}


function showHint(scenario) {
    const hintMessage = getHintMessage(scenario);
    popupMessage.textContent = hintMessage;
    popup.classList.add("active");

    setTimeout(() => {
        popup.classList.remove("active");
    }, 5000);
}
// Timer function to format and display time
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes < 10 ? '0' : ''}${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}




// Start the timer
function startTimer() {
    const startTime = new Date() - elapsedTime * 1000;
    
    timerInterval = setInterval(() => {
        const elapsedSeconds = Math.floor((new Date() - startTime) / 1000);
        elapsedTime = elapsedSeconds;  // Update global elapsed time
        timerElement.textContent = formatTime(elapsedSeconds);
        timerElement2.textContent = formatTime(elapsedSeconds);
        timerElement3.textContent = formatTime(elapsedSeconds);
        timerElement4.textContent = formatTime(elapsedSeconds); // Update the new timer
        timerElement5.textContent = formatTime(elapsedSeconds);
        timerElement6.textContent = formatTime(elapsedSeconds);
        timerElement7.textContent = formatTime(elapsedSeconds);
        timerElement8.textContent = formatTime(elapsedSeconds);
       
    }, 1000);
   
    
     

}

document.addEventListener('DOMContentLoaded', function() {
    speakScenarioText(1);
  });
// Stop the timer
function stopTimer() {
    clearInterval(timerInterval);
    elapsedTime = Math.floor((new Date() - timerStart) / 1000);
}

// Slider interaction
const slider = document.getElementById("slider");
const choiceImages = document.querySelectorAll(".choice-image");
slider.addEventListener("input", () => {
    const value = slider.value;
    choiceImages.forEach(image => {
        image.classList.remove("active");
    });
    document.getElementById(`choice-${value}`).classList.add("active");
});

// Submit for Scenario 1
const submitBtn = document.getElementById("submit-btn");
const scenario1Choices = document.getElementById("slider");
submitBtn.addEventListener("click", () => {

    const selectedValue = parseInt(slider.value);
    if (selectedValue === correctAnswer1) {

        showPopup("Correct! Moving to the next scenario.");
        scenario1Choices.disabled = true;

            setTimeout(() => {
                scenario1Choices.disabled = false;
            }, 2000);

        setTimeout(() => {
            scenario1.style.display = "none";
            scenario7.style.display = "flex";
            
          
        }, 2000);
       
    }  else {
        scenario1Attempts++;
        if (scenario1Attempts > 2) {
            showHint("Scenario 1");
            scenario1Choices.disabled = true;
            setTimeout(() => {
                scenario1Choices.disabled = false;
            }, 5000);
        } else {
            showPopup("Wrong answer. Try again!");
            scenario1Choices.disabled = true;
            setTimeout(() => {
                scenario1Choices.disabled = false;
            }, 2000);
            
           

        }
    }
});

// Button options for Scenario 2
// Button options for Scenario 4
const buttonOptions2 = document.querySelectorAll("#scenario-2 .btn-option");
buttonOptions2.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer2) {
    
            showPopup("Correct! Moving to the next scenario.");
            buttonOptions2.forEach(button => {
                button.disabled = true;
            });
            setTimeout(() => {
                buttonOptions2.forEach(button => {
                    button.disabled = false;
                }, 2000);
            })
            setTimeout(() => {
                scenario2.style.display = "none";
                scenario8.style.display = "flex";
            }, 2000);
        } else {
            scenario4Attempts++;
            if (scenario2Attempts > 2) {
                showHint("Scenario 4");
                buttonOptions2.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions2.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions2.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions2.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 3
const buttonOptions3 = document.querySelectorAll("#scenario-3 .btn-options");
// const scenario3Choices = document.getElementById("scenario3Choices");
buttonOptions3.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {

            showPopup("Correct! Moving to the next scenario.");
            buttonOptions3.forEach(button => {
                button.disabled = true;
            });

            setTimeout(() => {
                buttonOptions3.forEach(button => {
                    button.disabled = false;
                });
            }, 2000);
            setTimeout(() => {
                scenario3.style.display = "none";
                scenario5.style.display = "flex";
            }, 2000);
        } else {
            scenario3Attempts++;
            if (scenario3Attempts > 2) {
                showHint("Scenario 3");
                buttonOptions3.forEach(button => {
                    button.disabled = true;
                });

                setTimeout(() => {
                    buttonOptions3.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions3.forEach(button => {
                    button.disabled = true;
                });

                setTimeout(() => {
                    buttonOptions3.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 4
const buttonOptions4 = document.querySelectorAll("#scenario-4 .btn-option");
buttonOptions4.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer4) {
    
            showPopup("Correct! Moving to the next scenario.");
            buttonOptions4.forEach(button => {
                button.disabled = true;
            });
            setTimeout(() => {
                buttonOptions4.forEach(button => {
                    button.disabled = false;
                }, 2000);
            })
            setTimeout(() => {
                scenario4.style.display = "none";
                scenario3.style.display = "flex";
            }, 2000);
        } else {
            scenario4Attempts++;
            if (scenario4Attempts > 2) {
                showHint("Scenario 4");
                buttonOptions4.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions4.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions4.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions4.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 5
const buttonOptions5 = document.querySelectorAll("#scenario-5 .btn-option");
buttonOptions5.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer5) {

            showPopup("Correct! Moving to the next scenario.");
            buttonOptions5.forEach(button => {
                button.disabled = true;
            });
            setTimeout(() => {
                buttonOptions5.forEach(button => {
                    button.disabled = false;
                });
            }, 2000);
            setTimeout(() => {
                scenario5.style.display = "none";
                scenario6.style.display = "flex";
            }, 2000);
        } else {
            scenario5Attempts++;
            if (scenario5Attempts > 2) {
                showHint("Scenario 5");
                buttonOptions5.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions5.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions5.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions5.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 6
const buttonOptions6 = document.querySelectorAll("#scenario-6 .btn-option");
buttonOptions6.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer6) {

            showPopup("Correct! Moving to the next scenario.");

            buttonOptions6.forEach(button => {
                button.disabled = true;
            });
            setTimeout(() => {
                buttonOptions6.forEach(button => {
                    button.disabled = false;
                });
            }, 2000);

            setTimeout(() => {
                scenario6.style.display = "none";
                scenario1.style.display = "flex";
            }, 2000);
        } else {
            scenario6Attempts++;
            if (scenario6Attempts > 2) {
                showHint("Scenario 6");

                buttonOptions6.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions6.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions6.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions6.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 7
const buttonOptions7 = document.querySelectorAll("#scenario-7 .btn-option");
buttonOptions7.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer7) {

            showPopup("Correct! Moving to the next scenario.");
            buttonOptions7.forEach(button => {
                button.disabled = true;
            });
            setTimeout(() => {
                buttonOptions7.forEach(button => {
                    button.disabled = false;
                });
            }, 2000);
            setTimeout(() => {
                scenario7.style.display = "none";
                scenario2.style.display = "flex";
            }, 2000);
        } else {
            scenario7Attempts++;
            if (scenario7Attempts > 2) {
                showHint("Scenario 7");
                buttonOptions7.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions7.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");
                buttonOptions7.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions7.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Button options for Scenario 8
const buttonOptions8 = document.querySelectorAll("#scenario-8 .btn-option");
buttonOptions8.forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.getAttribute("data-answer");
        if (answer === correctAnswer3) {
            stopTimer(); // Stop the timer when showing the congratulations message
            console.log(scenario1Attempts, scenario2Attempts, scenario3Attempts, scenario4Attempts, scenario5Attempts, scenario6Attempts, scenario7Attempts, scenario8Attempts);
            showcongrats("Great job! You’ve effectively responded to the volcanic eruption drill by staying alert and making informed decisions. Your preparedness and quick actions are key to ensuring your safety and the safety of those around you. Keep up the excellent work!");
            
            // Prepare data for progress update
            const data = [
                {
                  student_id: parseInt(userId),
                  disaster_id: 3,
                  scenario_id: 1,
                  total_attempt: scenario1Attempts,
                  total_spent_time: elapsedTime
                },
                {
                  student_id: parseInt(userId),
                  disaster_id: 3,
                  scenario_id: 2,
                  total_attempt: scenario2Attempts,
                  total_spent_time: elapsedTime
                },
                {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 3,
                    total_attempt: scenario3Attempts,
                    total_spent_time: elapsedTime
                  },
                  {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 4,
                    total_attempt: scenario4Attempts,
                    total_spent_time: elapsedTime
                  },
                  {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 5,
                    total_attempt: scenario5Attempts,
                    total_spent_time: elapsedTime
                  },
                  {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 6,
                    total_attempt: scenario6Attempts,
                    total_spent_time: elapsedTime
                  },
                  {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 7,
                    total_attempt: scenario7Attempts,
                    total_spent_time: elapsedTime
                  },
                  {
                    student_id: parseInt(userId),
                    disaster_id: 3,
                    scenario_id: 8,
                    total_attempt: scenario8Attempts,
                    total_spent_time: elapsedTime
                  },
            ];
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

            // Send progress data to the server
            fetch('/api/progress', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: csrfToken,
                    data: data
                })
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));

            stopTimer();
            buttonOptions8.forEach(button => {
                button.disabled = true;
            });
            

            setTimeout(() => {
                scenario8.style.display = "none";
                scenario8.style.display = "flex";
            }, 10000);
        } else {
            scenario8Attempts++;
            if (scenario8Attempts > 2) {
                showHint("Scenario 8");

                buttonOptions8.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions8.forEach(button => {
                        button.disabled = false;
                    });
                }, 5000);
            } else {
                showPopup("Wrong answer. Try again!");

                buttonOptions8.forEach(button => {
                    button.disabled = true;
                });
                setTimeout(() => {
                    buttonOptions8.forEach(button => {
                        button.disabled = false;
                    });
                }, 2000);
            }
        }
    });
});

// Popup logic
const popup = document.getElementById("popup");
const popupMessage = document.getElementById("popup-message");
const closePopup = document.getElementById("close-popup");

function showPopup(message) {
    popupMessage.textContent = message;
    popup.classList.add("active");

    setTimeout(() => {
        popup.classList.remove("active");
    }, 2000);
}
function showcongrats(message) {
    popupMessage.textContent = message;
    popup.classList.add("active");

    // Create a "Go to Dashboard" button
    const goToDashboardButton = document.createElement("button");
    goToDashboardButton.textContent = "Go to Dashboard";
    goToDashboardButton.id = "go-to-dashboard-button";
    popup.appendChild(goToDashboardButton); // Append the button to the popup

    // Add event listener to the button
    goToDashboardButton.addEventListener("click", () => {
        window.location.href = '/disasters'; // Redirect to dashboard
    });
}



// Start the timer initially
startTimer();

