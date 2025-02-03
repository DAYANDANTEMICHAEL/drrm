<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Earthquake Disaster Escape Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/earthquaketo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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



    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- Scenario 2 -->
    <div class="scenario-container" id="scenario-2" style="display: flex;">
        <div id="timer-2" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-2">
        <h2 class="mb-4">You are at home, working
            on an assignment about
            fault lines and first aid kits
            for school. As you're
            researching, you discover
            that your area is near a
            major fault line. You
            realize that an earthquake
            could occur at any time, so
            you need to prepare your
            first aid kit.

        </h2>
        <p class="typewriter">
            <span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What essential items
                should you include in
                your first aid kit to
                prepare for a potential
                earthquake in your area?</span>
        </p>

        <div class="button-options mt-4" id="scenario-2-choices">
            <input type="checkbox" id="bandages" name="bandages" value="Bandages" data-answer="Bandages">
            <label for="bandages"><img src="{{ asset('assets/bandaid.png') }}" alt=""> Bandages</label><br>

            <input type="checkbox" id="rubbing-alcohol" name="rubbing-alcohol" value="Rubbing Alcohol" data-answer="Rubbing Alcohol">
            <label for="rubbing-alcohol"><img src="{{ asset('assets/alcohol.png') }}" alt=""> Rubbing Alcohol</label><br>

            <input type="checkbox" id="candies" name="candies" value="Candies" data-answer="Candies">
            <label for="candies"><img src="{{ asset('assets/candies.png') }}" alt=""> Candies</label><br>

            <input type="checkbox" id="teddy-bear" name="teddy-bear" value="Teddy Bear" data-answer="Teddy Bear">
            <label for="teddy-bear"><img src="{{ asset('assets/teddybear.png') }}" alt=""> Teddy Bear</label><br>

            <input type="checkbox" id="antiseptic-solution" name="antiseptic-solution" value="Antiseptic Solution" data-answer="Antiseptic Solution">
            <label for="antiseptic-solution"><img src="{{ asset('assets/antiseptic.png') }}" alt=""> Antiseptic Solution</label><br>

            <input type="checkbox" id="flashlight" name="flashlight" value="Flashlight" data-answer="Flashlight">
            <label for="flashlight"><img src="{{ asset('assets/flashlight.png') }}" alt=""> Flashlight</label><br>

            <input type="checkbox" id="canned-goods" name="canned-goods" value="Canned Goods" data-answer="Canned Goods">
            <label for="canned-goods"><img src="{{ asset('assets/cannedgoods.png') }}" alt=""> Canned Goods</label><br>

            <input type="checkbox" id="gauze-pads" name="gauze-pads" value="Gauze Pads" data-answer="Gauze Pads">
            <label for="gauze-pads"><img src="{{ asset('assets/gauze.png') }}" alt=""> Gauze Pads</label><br>

            <input type="checkbox" id="medicines" name="medicines" value="Medicines" data-answer="Medicines">
            <label for="medicines"><img src="{{ asset('assets/medicines.png') }}" alt=""> Medicines</label><br>

            <input type="checkbox" id="instant-noodles" name="instant-noodles" value="Instant Noodles" data-answer="Instant Noodles">
            <label for="instant-noodles"><img src="{{ asset('assets/noodles.png') }}" alt=""> Instant Noodles</label><br>
        </div>

    </div>
    </div>



<!----------------------------------------------------------------------------------------------------------------------------------------- -->


   <!-- Scenario 4 -->
   <div class="scenario-container" id="scenario-4" style="display: none;">
        <div id="timer-4" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-4">
        <h2 class="mb-4">The day after bringing your
            first aid kit assignment to
            school, your teacher
            announces an earthquake
            drill. As the bell rings, you
            need to remember the
            proper sequence of actions.
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What is the correct
                sequence to perform
                during an earthquake
                drill?</span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong">Stand, Shout, and Run</button>
            <button class="btn-option" data-answer="wrong">Cover, Duck, and Hold
            </button>
            <button class="btn-option" data-answer="correct">Duck, Cover, and Hold
            </button>
            <button class="btn-option" data-answer="wrong">Run, Cover, and Duck</button>
        </div>
    </div>
    </div>




    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->



    <!-- Scenario 5 -->
    <div class="scenario-container" id="scenario-5" style="display: none;">
        <div id="timer-5" class="timer-position">00:00</div>
        
    <div class="scenario-content" id="scenario-content-5">
        <h2 class="mb-4">After the bell rings during
            the earthquake drill, it's
            time to safely exit the
            room. You need to decide
            whether to go right or left,
            but each route has its own
            characteristics.
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">Which route should you
                take to safely exit the
                room during the
                earthquake drill?
            </span></p>
        <div style="display: flex; justify-content: space-between; border: 2px solid #28a745; border-radius: 10px; padding: 20px; background-color: #f8f9fa;">
            <div style="flex: 1; margin-right: 10px; padding: 10px; border: 1px solid #28a745; border-radius: 5px; background-color: #e9ffe9;">
            <strong>Left Route:</strong>
                <ul>
                    <li>A wider hallway with windows</li>
                    <li>Clear path with no visible obstacles</li>
                    <li>The emergency exit is farther down the hall</li>
                </ul>
            </div>

            <div style="margin-left: 20px;"></div> <!-- Gap -->

            <div style="flex: 1; margin-left: 10px; padding: 10px; border: 1px solid #28a745; border-radius: 5px; background-color: #ffe9e9;">
                <strong>Right Route:</strong>
                <ul>
                    <li>A narrow hallway with no windows</li>
                    <li>Potentially blocked by fallen furniture or debris</li>
                    <li>Close to the emergency exit door</li>
                </ul>
            </div>
        </div>
        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong" style="font-size: 50px; padding: 25px; margin: 0 20px; background-color: #28a745; border: none; border-radius: 50%; transition: transform 0.2s, background-color 0.2s;" 
                    onmouseover="this.style.backgroundColor='#218838'; this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.transform='scale(1)';">
                <i class="fas fa-arrow-left" style="color: white;"></i>
            </button>
            <div style="margin-left: 300px;"></div> <!-- Gap -->
            <button class="btn-option" data-answer="correct" style="font-size: 50px; padding: 25px; margin: 0 20px; background-color: #28a745; border: none; border-radius: 50%; transition: transform 0.2s, background-color 0.2s;" 
                    onmouseover="this.style.backgroundColor='#218838'; this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.transform='scale(1)';">
                <i class="fas fa-arrow-right" style="color: white;"></i>
            </button>
        </div>
    </div>
    </div>



    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- Scenario 8 -->
    <div class="scenario-container" id="scenario-8" style="display: none;">
        <div id="timer-8" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-8">
       



                <h2 class="mb-4">You've reached the
            designated evacuation area
            and found a safe spot.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What is the best thing to
                do while waiting for
                instructions in the
                evacuation area?
            </span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong"> Keep moving to stay warm and alert.</button>
            <button class="btn-option" data-answer="correct"> Stay in a safe location and wait for the signal</button>
            <button class="btn-option" data-answer="wrong"> Chat with others around you to pass the time</button>
            <button class="btn-option" data-answer="wrong"> Leave the area to search for your family
            </button>
        </div>
    </div>
    </div>


    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->




       
        <!-- Scenario 1 -->
        <div class="scenario-container" id="scenario-1" style="display: none;">
        <div id="timer" class="timer-position">00:00</div>

            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/newss.gif') }}" alt="scenario-1" class="img-fluid">
        </div> --}}
        <div class="scenario-content" id="scenario-content-1" style="display: flex;">
            <h2 class="mb-4">You're thinking about how
                to exit the building faster
                during the earthquake drill.
                Some of your classmates
                suggest you take the
                elevator while other wants
                to take the stairs.
            </h2>

            <p class="typewriter">
            <span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">Which option should
                    you choose to safely
                    exit the building during
                    an earthquake?
                </span>
            </p>


            <style>
                @keyframes shake {
                    0% { transform: translate(0); }
                    25% { transform: translate(-5px); }
                    50% { transform: translate(5px); }
                    75% { transform: translate(-5px); }
                    100% { transform: translate(0); }
                }
                .shake {
                    animation: shake 0.2s; /* Fast shake */
                }
            </style>

<div class="button-options" style="display: flex; justify-content: center; align-items: center;">
                <button class="btn-option shake" data-answer="correct" style="font-size: 50px; padding: 25px; margin: 0 20px; background-color: #28a745; border: none; border-radius: 5px; transition: transform 0.2s, background-color 0.2s; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);" 
                        onmouseover="this.style.backgroundColor='#218838'; this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.5)';" 
                        onmouseout="this.style.backgroundColor='#28a745'; this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.3)';"
                        onclick="showImage(this)">
                    Stairs
                </button>

                <button class="btn-option shake" data-answer="wrong" style="font-size: 50px; padding: 25px; margin-left: 90px; background-color: #28a745; border: none; border-radius: 5px; transition: transform 0.2s, background-color 0.2s; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);" 
                        onmouseover="this.style.backgroundColor='#218838'; this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.5)';" 
                        onmouseout="this.style.backgroundColor='#28a745'; this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.3)';">
                        
                    Elevator
                </button>
            </div>
        </div>
    </div>


    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->



    <!-- Scenario 7 -->
    <div class="scenario-container" id="scenario-7" style="display: none;">
        <div id="timer-7" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-7">
        <h2 class="mb-4">Finally, you're near the
            exit, but there are a lot of
            obstacles blocking the way.
            You need to find a way to
            signal for help.
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">If you are trapped, what
                should you do next to
                call for help?
            </span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong"> Shout for help loudly
            </button>
            <button class="btn-option" data-answer="wrong">Wait for someone else to help
            </button>
            <button class="btn-option" data-answer="correct">Whistle to get attention
            </button>
            <button class="btn-option" data-answer="wrong"> Try to move the obstacles yourself
            </button>
        </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->






    <!-- Scenario 3 -->
    <div class="scenario-container" id="scenario-3" style="display: none;">
        <div id="timer-3" class="timer-position">00:00</div>
      
    <div class="scenario-content" id="scenario-content-3">
        <h2 class="mb-4">You've successfully exited
            the building, but now you
            need to find the designated
            evacuation area. You must
            choose the safest location
            to gather with others.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">You must now choose
                the safest location to
                gather with others.
            </span></p>
        </p>
        <div class="button-options" style="display: flex; flex-wrap: wrap; justify-content: center;">
                    <div style="text-align: center; margin: 10px;">
                        <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="border: none;">
                            <img src="{{ asset('assets/parkinglot.png') }}" alt="" style="width: 150px; height: 150px;">
                            <p>A. A parking lot</p>
                        </button>
                        <
                    </div>
                    <div style="text-align: center; margin: 10px;">
                        <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="border: none;">
                            <img src="{{ asset('assets/crowdedarea.png') }}" alt="" style="width: 150px; height: 150px;">
                            <p>B. A crowded indoor area</p>
                           
                        </button>
                        <
                    </div>
                    <div style="text-align: center; margin: 10px;">
                        <button class="btn-options" data-answer="correct" id="scenario3Choices" style="border: none;">
                            <img src="{{ asset('assets/park.png') }}" alt="" style="width: 150px; height: 150px;">
                            <p>C. An open field or park</p>
                        </button>
                            <
                    </div>
                    <div style="text-align: center; margin: 10px;">
                        <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="border: none;">
                            <img src="{{ asset('assets/alleyway.png') }}" alt="" style="width: 150px; height: 150px;">
                            <p>D. A small alleyway</p>
                        </button>
                            <
                    </div>
                </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->








    <!-- Scenario 6 -->
    <div class="scenario-container" id="scenario-6" style="display: none;">
        <div id="timer-6" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-6">
    <h2 class="mb-4">You successfully guided
            your classmates and chose
            the left route. Now, as you
            move along, you must stay
            away from hazard-prone areas to ensure everyone's
            safety.
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">Which area should you
                avoid while evacuating
                during an earthquake?</span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="correct"> Near windows or glass panels</button>
            <button class="btn-option" data-answer="wrong"> In the middle of the hallway</button>
            <button class="btn-option" data-answer="wrong"> Close to the exit door</button>
            <button class="btn-option" data-answer="wrong"> Near the classroom desk area</button>
        </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- Popup -->
    <div id="popup" class="popup">
        <p id="popup-message"></p>

    </div>
    </div>

    <div class="tago mt-5" style="margin-top: 100px;">&nbsp;</div>
    <script>
        const userId = {
            {
                json_encode(session('logged_in_user_id'))
            }
        };
    </script>


    <script src="https://cdn.jsdelivr.net/npm/axios@0.27.2/dist/axios.min.js"></script>
    <script src="{{ asset('js/earthquake.js') }}"></script>
</body>
