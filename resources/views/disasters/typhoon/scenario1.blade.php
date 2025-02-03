<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Typhoon Disaster Escape Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/typhoons.css') }}">
    
    <style>
        .btn-options {
            border: none; /* Remove the border */
            background-color: none;
        }
    </style>
</head>

<body>
   
    <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    <div id="scenario-1-trigger" style="display: none;"></div>

    <!-- Main Container -->
    <div class="container mt-5 " style="width: 100%; height: 100%; max-width: 1600px; padding: 0 50px;">

        <!-- Scenario 1 -->
        <div class="scenario-container" id="scenario-1">
            
        <div id="timer" class="timer-position">00:00</div>
            
            <div class="scenario-content" id="scenario-content-1">
                <h2 class="mb-4">It's a Sunday morning. You're having breakfast with your family while watching the news.</h2>
                
                <h2 class="mb-4"> The news announces that heavy rains and very strong winds are expected; damage to houses and trees is possible. Winds of 89–117 km/h are expected within 18 hours. </h2>

                <p class="typewriter"><span class="animation">What typhoon signal number does this represent? </span></p>
                
                <div class="choice-slider mt-4">
                    <div class="choice-images" id="choice-images">
                        <img class="choice-image" id="choice-1" src="{{ asset('assets/signal1.png') }}" alt="Signal 1">
                        <img class="choice-image" id="choice-2" src="{{ asset('assets/signal2.png') }}" alt="Signal 2">
                        <img class="choice-image" id="choice-3" src="{{ asset('assets/signal3.png') }}" alt="Signal 3">
                        <img class="choice-image" id="choice-4" src="{{ asset('assets/signal4.png') }}" alt="Signal 4">
                        <img class="choice-image" id="choice-5" src="{{ asset('assets/signal5.png') }}" alt="Signal 5">
                    </div>
                </div>

                <input type="range" id="slider" min="1" max="5" value="1" class="form-range" oninput="updateSliderValue(this.value)">
                <div class="slider-labels">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                </div>
                <div id="slider-value" class="mt-2">Current Value: 1</div>
                <script>
                    function updateSliderValue(value) {
                        document.getElementById('slider-value').innerText = 'Current Value: ' + value;
                    }
                </script>

                <button id="submit-btn" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>

        <!-- Scenario 2 -->
        <div class="scenario-container" id="scenario-2" style="display: none;">
            
        <div id="timer-2" class="timer-position">00:00</div>
           
            <div class="scenario-content" id="scenario-content-2">
                <h2 class="mb-4">You open the kitchen cabinet and find 10 items. You need to pick 5 essential items to include in your emergency survival kit. </h2>
                <p class="typewriter"><span class="animation"> Which 5 items will you choose for your emergency bag? </span></p>

                <div class="button-options mt-4" id = "scenario-2-choices">
                    <input type="checkbox" id="flashlight" name="flashlight" value="Flashlight" data-answer="Flashlight">
                    <label for="flashlight"> <img src="{{ asset('assets/flashlight.png') }}" alt=""> Flashlight</label><br>

                    <input type="checkbox" id="slippers" name="slippers" value="Slippers" data-answer="Slippers">
                    <label for="slippers"> <img src="{{ asset('assets/slippers.png') }}" alt=""> Slippers</label><br>

                    <input type="checkbox" id="extra-batteries" name="extra-batteries" value="Extra Batteries" data-answer="Extra batteries">
                    <label for="extra-batteries"><img src="{{ asset('assets/batteries.png') }}" alt=""> Extra Batteries</label><br>

                    <input type="checkbox" id="first-aid-kit" name="first-aid-kit" value="First-aid Kit" data-answer="First-aid kit">
                    <label for="first-aid-kit"><img src="{{ asset('assets/firstaidkit.png') }}" alt=""> First-aid Kit</label><br>
                   
                    <input type="checkbox" id="canned-goods" name="canned-goods" value="Canned goods" data-answer="Canned goods">
                    <label for="canned-goods"><img src="{{ asset('assets/cannedgoods.png') }}" alt=""> Canned goods</label><br>

                    <input type="checkbox" id="deck-of-cards" name="deck-of-cards" value="Deck of Cards" data-answer="Deck of Cards">
                    <label for="deck-of-cards"><img src="{{ asset('assets/deckofcards.png') }}" alt=""> Deck of Cards</label><br>

                    <input type="checkbox" id="blanket" name="blanket" value="Blanket" data-answer="Blanket">
                    <label for="blanket"><img src="{{ asset('assets/blanket.png') }}" alt=""> Blanket</label><br>

                    <input type="checkbox" id="pillow" name="pillow" value="Pillow" data-answer="Pillow">
                    <label for="pillow"><img src="{{ asset('assets/pillow.png') }}" alt=""> Pillow</label><br>

                    <input type="checkbox" id="teddy-bear" name="teddy-bear" value="Teddy Bear" data-answer="Teddy bear">
                    <label for="teddy-bear"><img src="{{ asset('assets/teddybear.png') }}" alt=""> Teddy Bear</label><br>

                    <input type="checkbox" id="bottled-water" name="bottled-water" value="Bottled Water" data-answer="Bottled water">
                    <label for="bottled-water"><img src="{{ asset('assets/water.png') }}" alt=""> Bottled Water</label><br>
                </div>
            
            </div>
        </div>

        <!-- Scenario 3 -->
        <div class="scenario-container" id="scenario-3" style="display: none;">
            
        <div id="timer-3" class="timer-position">00:00</div>
            
            <div class="scenario-content" id="scenario-content-3">
                <h2 class="mb-4">You're now in your bedroom. After preparing the family emergency bag, your mother asked you to  remember the emergency hotlines and agencies you would call during a typhoon. </h2>
                <p class="typewriter"><span class="animation">Which government agency should you NOT call in case of an emergency? </span></p>
                </p>

                <div class="button-optionss mt-4" style="display: flex; flex-direction: column;">
                    <div style="margin: 70px;">
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/redcross.png') }}" alt="" ></button>
                    <button class="btn-options" data-answer="correct" id="scenario3Choices"><img src="{{ asset('assets/dot.png') }}" alt="" ></button>
                </div>
                <div style="margin: 70px;">
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/philcoastguard.png') }}" alt="" ></button>
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices"><img src="{{ asset('assets/ndrrmc.png') }}" alt="" ></button>
                
                </div>
                </div>
            </div>
        </div>

        <!-- Scenario 4 -->
        <div class="scenario-container" id="scenario-4" style="display: none;">
            
        <div id="timer-4" class="timer-position">00:00</div>
           
            <div class="scenario-content" id="scenario-content-4">
                <h2 class="mb-4">Now, you have the emergency hotlines and know the agencies you can call. You must keep your communication open.</h2>
                    <p class="typewriter"><span class="animation">What is the next step to ensure you can call for help during an emergency?</span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Wait for the typhoon to pass before checking your phone.</button>
                    <button class="btn-option" data-answer="correct">Make sure your phone is fully charged and has enough credit.</button>
                    <button class="btn-option" data-answer="wrong">Unplug your phone to prevent damage.</button>
                    <button class="btn-option" data-answer="wrong">Only check your phone once you hear the emergency sirens.</button>
                </div>
            </div>
        </div>

             <!-- Scenario 5 -->
        <div class="scenario-container" id="scenario-5" style="display: none;">
            <div id="timer-5" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-5" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-5">
                <h2 class="mb-4">You're in the living room preparing to evacuate with your family, but you notice water leaking from the ceiling. To prevent further damage, you need to select and use the correct tools from the items available.</h2>
                <p class="typewriter"><span class="animation">{{ $scenario5->question }}</span></p>
                <div class="image-container" style="display: flex; justify-content: center; margin-bottom: 20px;">
                    <div id="square2" class="draggable-square" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 120px; height: 120px; background-color: rgba(173, 216, 230, 0.8); border: 2px solid #007BFF; border-radius: 10px; margin: 0 10px; position: relative; overflow: hidden;">
                    </div>
                    <div id="square1" class="draggable-square" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 120px; height: 120px; background-color: rgba(144, 238, 144, 0.8); border: 2px solid #28A745; border-radius: 10px; margin: 0 10px; position: relative; overflow: hidden;">
                    </div>
                    <div id="square3" class="draggable-square" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 120px; height: 120px; background-color: rgba(255, 182, 193, 0.8); border: 2px solid #FF69B4; border-radius: 10px; margin: 0 10px; position: relative; overflow: hidden;">
                    </div>
                </div>
                <div class="image-container" style="display: flex; justify-content: center; margin-bottom: 20px;">
                    <img src="{{ asset('assets/bucket.png') }}" alt="Bucket" style="margin: 0 10px; width: 120px; height: 120px; border: 2px solid #007BFF; border-radius: 10px;" draggable="true" ondragstart="drag(event)">
                    <img src="{{ asset('assets/ladder.png') }}" alt="Ladder" style="margin: 0 10px; width: 120px; height: 120px; border: 2px solid #28A745; border-radius: 10px;" draggable="true" ondragstart="drag(event)">
                    <img src="{{ asset('assets/waterproofseal.png') }}" alt="Waterproof Sealant" style="margin: 0 10px; width: 120px; height: 120px; border: 2px solid #FF69B4; border-radius: 10px;" draggable="true" ondragstart="drag(event)">
                </div>
                <div class="button-options mt-4">
                    <button id="submit-tools-btn" class="btn btn-primary">Submit Tools</button>
                </div>
                <script>
                    // Define correctDragItems in the global scope of this script
                    const correctDragItems = {
                        "Bucket": "square1",
                        "Ladder": "square2",
                        "Waterproof Sealant": "square3",
                    };

                    document.addEventListener('DOMContentLoaded', function() {
                        // Add event listener to the submit button
                        document.getElementById('submit-tools-btn').addEventListener('click', function() {
                            // Check if all items are placed correctly when the button is clicked
                            const allCorrect = Object.keys(correctDragItems).every(item => {
                                const square = document.getElementById(correctDragItems[item]);
                                return square && square.innerHTML !== ''; // Check if the square is filled
                            });

                            // Only show the success message if all items are placed correctly
                            if (allCorrect) {
                                showPopup("Correct! Moving to the next scenario.");
                                // Disable buttons or perform other actions as needed
                                setTimeout(() => {
                                    scenario5.style.display = "none";
                                    scenario6.style.display = "flex";
                                }, 2000);
                            } else {
                                showPopup("Please place all items correctly before submitting.");
                            }
                        });
                    });

                    function allowDrop(event) {
                        event.preventDefault();
                    }

                    function drag(event) {
                        // Store the image ID for removal
                        event.dataTransfer.setData("imageId", event.target.alt); 
                    }

                    function drop(event) {
                        event.preventDefault();
                        const imageId = event.dataTransfer.getData("imageId");

                        // Check which square is being dropped on
                        const targetSquare = event.target;

                        // Check if the dropped image is correct for the target square
                        if (correctDragItems[imageId] === targetSquare.id) {
                            // Find the original image
                            const originalImg = document.querySelector(`img[alt="${imageId}"]`);
                            // Create a clone of the original image to append to the square
                            const imgClone = originalImg.cloneNode(true);
                            imgClone.style.position = 'absolute';
                            imgClone.style.width = '110%'; // Fill the square
                            imgClone.style.height = '100%'; // Fill the square
                            imgClone.style.top = '0'; // Align to the top
                            imgClone.style.left = '-12px'; // Align to the left

                            // Append the cloned image to the square
                            targetSquare.innerHTML = ''; // Clear the square before adding the new image
                            targetSquare.appendChild(imgClone); 

                            // Remove the original image from the container
                            originalImg.style.display = 'none'; // Hide the dragged image
                        } else {
                            // Provide feedback for incorrect drops
                            showPopup("Wrong square! Try again.");
                        }
                    }
                </script>
            </div>
        </div>

          <!-- Scenario 6 -->
          <div class="scenario-container" id="scenario-6" style="display: none;">
            
          <div id="timer-6" class="timer-position">00:00</div>
           
            <div class="scenario-content" id="scenario-content-6">
                <h2 class="mb-4">As you and your family
                    stay indoors, you hear a
                    knock on the front door.
                    </h2>
                <h2 class="mb-4"> The local government has
                    issued an order for your
                    family to evacuate
                    immediately due to the risk of flooding. Before
                    heading to the evacuation
                    center, you need to ensure
                    your house is ready to be
                    left behind.
                    </h2>
                    <p class="typewriter"><span class="animation">What should you make sure to do before leaving your house for the evacuation center? </span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Leave the doors unlocked for easier access when you return.</button>
                    <button class="btn-option" data-answer="wrong">Open all windows to let air circulate.</button>
                    <button class="btn-option" data-answer="correct">Turn off all electrical appliances and the main power switch. Lock all doors.</button>
                    <button class="btn-option" data-answer="wrong">Secure important documents and valuables in a paper envelope.</button>
                </div>
            </div>
        </div>

          <!-- Scenario 7 -->
          <div class="scenario-container" id="scenario-7" style="display: none;">
            <div id="timer-7" class="timer-position">00:00</div>
            
            <div class="scenario-content" id="scenario-content-7">
                <h2 class="mb-4">You and your family have
                    arrived at the evacuation
                    center to stay safe from
                    the typhoon and flooding.
                    To ensure everyone's
                    comfort and safety, you
                    need to understand the
                    basic rules and procedures
                    while staying in the
                    evacuation center</h2>

                <h2 class="mb-4"> To ensure everyone's
                    comfort and safety, you
                    need to understand the
                    basic rules and procedures
                    while staying in the
                    evacuation center</h2>
                
                    <p class="typewriter"><span class="animation">What should you do first upon arriving at the evacuation center? </span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Find a comfortable spot and rest immediately.</button>
                    <button class="btn-option" data-answer="correct">Help register your family with the evacuation center authorities.</button>
                    <button class="btn-option" data-answer="wrong">Take food and supplies without asking.</button>
                    <button class="btn-option" data-answer="wrong">Start mingling with other evacuees to make friends.</button>
                </div>
            </div>
        </div>

          <!-- Scenario 8 -->
          <div class="scenario-container" id="scenario-8" style="display: none;">
            
          <div id="timer-8" class="timer-position">00:00</div>
           
            <div class="scenario-content" id="scenario-content-8">
                <h2 class="mb-4">The typhoon is over, and
                    you're about to step
                    outside.</h2>
                    <p class="typewriter"><span class="animation"> What should you do when you observe fallen trees, wrecked cars, and other hazards in your surroundings? </span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Stay away from fallen trees, wrecked cars, and debris.</button>
                    <button class="btn-option" data-answer="wrong">Walk through the debris to see if you can help others.</button>
                    <button class="btn-option" data-answer="wrong">Climb over the fallen tree to get a better view</button>
                    <button class="btn-option" data-answer="wrong">Pick up the debris and move it to clear the road.</button>
                </div>
            </div>
        </div>
    
        <!-- Popup -->
        <div id="popup" class="popup">
            <p id="popup-message"></p>
            
        </div>
    </div>

    <div class="tago mt-5" style="margin-top: 100px;">&nbsp;</div>
    <script>
           const userId = {{ session('logged_in_user_id') }};
      </script>


    <script src="https://cdn.jsdelivr.net/npm/axios@0.27.2/dist/axios.min.js"></script>
    <script src="{{ asset('js/typhoon.js') }}"></script>
</body>
</html>