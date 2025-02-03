<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Volcanic Eruption Disaster Escape Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/volcanics.css') }}">
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


  <!-- Scenario 4 -->
  <div class="scenario-container" id="scenario-4" style="display: flex;">
        
  <div id="timer-4" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-4">
        <h2 class="mb-4">You're at a fast food restaurant with a friend. On the restaurant's
            television, PHIVOLCS reported volcanic activity near your area, and you
            are within the 6 km danger zone.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What should you do when you are within the danger zone of a volcanic eruption?</span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong">Stay at home and continue with your daily activities</button>
            <button class="btn-option" data-answer="correct">Evacuate immediately to a safer area away from the danger zone</button>
            <button class="btn-option" data-answer="wrong">Wait for the eruption to happen and then decide what to do.</button>
            <button class="btn-option" data-answer="wrong">Go outside to watch the volcanic activity closely.</button>
        </div>
    </div>
    </div>




    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->







    <!-- Scenario 3 -->
    <div class="scenario-container" id="scenario-3" style="display: none;">
        
    <div id="timer-3" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-3">
        <h2 class="mb-4">You're about to leave the fast food restaurant when a sudden volcanic earthquake strikes.
            Objects start shaking, and you must find a safe place within the restaurant to protect yourself.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">Where should you hide for protection during a volcanic earthquake?
            </span></p>
        </p>

        <div class="button-optionss mt-4" style="display: flex; flex-direction: column;">
            <div style="margin: 70px;">
                <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/16.png') }}" alt=""></button>
                <button class="btn-options" data-answer="wrong" id="scenario3Choices"><img src="{{ asset('assets/16.png') }}" alt=""></button>
            </div>
            <div style="margin: 70px;">
                <button class="btn-options" data-answer="correct" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/16.png') }}" alt=""></button>
                <button class="btn-options" data-answer="wrong" id="scenario3Choices"><img src="{{ asset('assets/16.png') }}" alt=""></button>
            </div>
        </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->




    <!-- Scenario 5 -->
    <div class="scenario-container" id="scenario-5" style="display: none;">
        
    <div id="timer-5" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-5">
        <h2 class="mb-4">You've successfully made it home. Your
            father instructs you to find the emergency go bag, but he doesn't remember where he put it. You know it should be stored in an easy-to-reach place for emergencies.
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">Where should you look for the emergency go bag?
            </span></p>
        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong">Inside a locked cabinet in the attic</button>
            <button class="btn-option" data-answer="correct">In the living room, near the main door</button>
            <button class="btn-option" data-answer="wrong">Under the bed in your room</button>
            <button class="btn-option" data-answer="wrong">In the storage room behindheavy boxes
    </button>
        </div>
    </div>
    </div>



    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->





    <!-- Scenario 6 -->
    <div class="scenario-container" id="scenario-6" style="display: none;">
        <div id="timer-6" class="timer-position">00:00</div>
        {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-6" class="img-fluid">
    </div> --}}
    <div class="scenario-content" id="scenario-content-6">
        <h2 class="mb-4">You found the emergency
                        bag in the living room.
                        Suddenly, you hear local
                        government officials
                        outside your house,
                        announcing that ashfall is
                        expected and evacuation
                        must be done quickly
        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What should you do next?
            </span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong">Stay inside and wait until
            the ashfall subsides
            </button>
            <button class="btn-option" data-answer="correct">Cover your face with a cloth or mask, bring the emergency bag, and evacuate immediately.</button>
            <button class="btn-option" data-answer="wrong">Go outside without any preparation to see the ashfall.</button>
            <button class="btn-option" data-answer="wrong"> Ignore the announcement and continue staying at home.</button>
            </button>
        </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->



        <!-- Scenario 1 -->
        <div class="scenario-container" id="scenario-1" style=" display:none;">
            <div id="timer" class="timer-position">00:00</div>
            
        <div class="scenario-content" id="scenario-content-1">
            <h2 class="mb-4">You already know that you need a mask during a volcanic eruption. You look into the emergency bag and find 3 types of masks. The first two are a Gas Mask and Na5 mask. 
            </h2>

            <p class="typewriter">
            <span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;"> What is the third mask? Complete the word by arranging the jumbled letters: URCASG MAILSK
                </span>
            </p>



            <div class="choice-slider mt-4">
                <div class="choice-images" id="choice-images">
                    <img class="choice-image" id="choice-1" src="{{ asset('assets/sig1.png') }}" alt="Signal 1">
                    <img class="choice-image" id="choice-2" src="{{ asset('assets/sig2.png') }}" alt="Signal 2">
                    <img class="choice-image" id="choice-3" src="{{ asset('assets/sig3.png') }}" alt="Signal 3">
                    <img class="choice-image" id="choice-4" src="{{ asset('assets/sig4.png') }}" alt="Signal 4">
                </div>
            </div>

            <input type="range" id="slider" min="1" max="4" value="1" class="form-range" oninput="updateSliderValue(this.value)">
            <div class="slider-labels">
                <span>MASK GRILLS</span>
                <span>SURGICAL FLASK</span>
                <span>SURGICAL MASK</span>
                <span>GAS MASK</span>
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



    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- Scenario 7 -->
    <div class="scenario-container" id="scenario-7" style="display: none;">
        
    <div id="timer-7" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-7">
        <h2 class="mb-4">In the evacuation center,
                        a person sustained
                        injuries in the attempt to
                        evacuate when the
                        volcano erupted.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What is the best possible option to do in this situation?
            </span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="correct"> Call the authorities immediately
            </button>
            <button class="btn-option" data-answer="wrong"> Ask for help if someone is
                                                            knowledgeable in
                                                            attending first aid
            </button>
            <button class="btn-option" data-answer="wrong"> Ignore the person injured
                                                            and pretend you did not
                                                            hear anything.
            </button>
            <button class="btn-option" data-answer="wrong"> Go to the injured and do
            first aid by yourself
            </button>
        </div>
    </div>
    </div>

    

    
<!----------------------------------------------------------------------------------------------------------------------------------------- -->





    <!-- Scenario 2 -->
    <div class="scenario-container" id="scenario-2" style="display: none;">
        <div id="timer-2" class="timer-position">00:00</div>
       
    <div class="scenario-content" id="scenario-content-2">
        <h2 class="mb-4">Days have passed after
                        the volcanic eruption.
                        You want to check the
                        condition of your house
                        and if there are any
                        damages.


        </h2>
        <p class="typewriter">
            <span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What is a reasonable thing to consider at this specific time?
</span>
        </p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong"> Find someone to help you
                                                            travel and check the house
            </button>
            <button class="btn-option" data-answer="wrong"> Monitor and listen to the
                                                        radio for updates.

            </button>
            <button class="btn-option" data-answer="correct"> Keep on staying indoors
                                                        until it is declared that it's
                                                        safe to go outside.


            </button>
            <button class="btn-option" data-answer="wrong"> Use recommended
                                                            protective gear to keep
                                                            yourself safe.

            </button>
        </div>

    </div>
    </div>



<!----------------------------------------------------------------------------------------------------------------------------------------- -->



 <!-- Scenario 8 -->
 <div class="scenario-container" id="scenario-8" style="display: none;">
        <div id="timer-8" class="timer-position">00:00</div>
      
    <div class="scenario-content" id="scenario-content-8">
        <h2 class="mb-4">The authorities have
                        lifted the restrictions and
                        people can now check
                        their houses to view the
                        aftermath of the disaster
                        that has struck.

        </h2>
        <p class="typewriter"><span class="animation" style="display: inline-block; max-width: 100%; overflow-wrap: break-word; margin-right: 10px; margin-left: 10px;">What is the recommended thing to do first after going back?</span></p>

        <div class="button-options mt-4">
            <button class="btn-option" data-answer="wrong"> Rush inside to start cleaning the</button>
            <button class="btn-option" data-answer="correct"> Wait for the ash cloud to
                                                        settle before going outside
                                                        and wear a mask for
                                                        protection</button>
            <button class="btn-option" data-answer="wrong"> Immediately open all
                                                windows to ventilate the
                                                house an</button>
            <button class="btn-option" data-answer="wrong"> Call your neighbors to see if they need help cleaning their homes.
            </button>
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
    <script src="{{ asset('js/volcanic.js') }}"></script>
    <span id="user-id" style="display:none;">{{ json_encode(session('logged_in_user_id')) }}</span>
</body>