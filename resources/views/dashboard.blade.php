<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="background">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-sm sm:rounded-lg">
                <div class="w-full h-full bg-no-repeat bg-cover rounded-3xl"
                    style="background-image: url('http://stilyan0901.infinityfreeapp.com/Rakovski.jpg');">

                    <div class="opacity py-4 max-w-md mx-auto mt-10 bg-white  shadow-lg rounded-lg overflow-hidden">
                        <div
                             class="relative start-10 w-5/6 border-solid border-2 border-yellow-600  rounded-lg
                             place-items-center bg-cover "
                             style="background-image: url('http://stilyan0901.infinityfreeapp.com/ParticipationLogo.jpg'); height: 80px">
                        </div>

                        @if (session('success'))
                            <div id="success-message" class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
                                 role="alert">
                                <p class="mb-2 text-sm font-style: italic text-green-600
                                dark:text-green-500">{{ session('success') }}</p>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-4 rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
                                 role="alert">
                                <p class="mb-2 text-sm font-style: italic text-red-600
                                dark:text-red-500">{{ session('error') }}</p>
                            </div>
                        @endif

                        <form  method="post" action="{{ route('dashboard', app()->getLocale() )}}" class=" py-4 px-6"
                               enctype="multipart/form-data">
                            @csrf

                            <!--First Name -->
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="first_name" value="{{ $form->firstname ?? '' }}"
                                       id="first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
                                    border-b-2 border-yellow-600 appearance-none dark:text-gray-600
                                    dark:border-yellow-600 dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                    placeholder=" "  required/>
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                                <label for="first_name"
                                    class="peer-focus:font-medium absolute text-sm  text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('First name') }}</label>

                            </div>

                            <!--Sure Name -->
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="surname" id="surname" value="{{ $form->surname ?? '' }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
                                    border-b-2 border-yellow-600 appearance-none dark:text-dark dark:border-yellow-600
                                    dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                    placeholder=" "  required/>
                                <x-input-error class="mt-2" :messages="$errors->get('surname')" />
                                <label for="surname"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Surname') }}</label>

                            </div>

                            <!--Last Name -->
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="last_name" id="last_name" value="{{ $form->last_name ?? '' }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
                                    border-b-2 border-yellow-600 appearance-none dark:text-dark dark:border-yellow-600
                                    dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                    placeholder=" "  required/>
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                <label for="last_name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Last name') }}
                                    </label>
                            </div>

                            <!--Email -->
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="email" name="email" id="email" value="{{ $form->email
                                 ?? '' }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
                                    border-b-2 border-yellow-600 appearance-none dark:text-dark dark:border-yellow-600
                                    dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                    placeholder=" " required/>
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                <label for="email"
                                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Email address') }}</label>
                            </div>

                            <!--Phone number -->
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="tel" name="phone" id="phone" value="{{ $form->phone ?? '' }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
                                    border-b-2 border-yellow-600 appearance-none dark:text-dark dark:border-yellow-600
                                    dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                    placeholder=" " required/>
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                <label for="phone"

                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Phone number') }}
                                </label>
                            </div>

                            <!--Participants -->
                            <div class="relative z-0 w-full mb-5 group">
                                <fieldset class="relative z-0 w-full mb-5 group">
                                    <label for="participant_type"
                                           class="block py-2.5 px-0 w-full text-sm text-gray-500 dark:text-yellow-600">{{ __('I will participate in the conference as:') }}</label>
                                    <select id="participant_type" name="participant_type" onclick="hideIfAuthor()"

                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent
                                            border-0 border-b-2 border-yellow-600 appearance-none dark:text-yellow-600
                                            dark:border-yellow-600 focus:outline-none focus:ring-0
                                            focus:border-lime-800 peer">
                                        <option value="" disabled selected hidden>{{ __('Select Participant Type')
                                        }}</option>
                                        @foreach($participantTypes as $participantType)
                                            <option value="{{ $participantType->id }}">{{ $participantType->getName
                                            }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('participant_type')" />
                                </fieldset>
                            </div>

                            <div id="hideIfAuthor" style="display: none">

                                <!--Report title -->
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="report_title" id="report_title" value="{{
                                    $form->report_title ?? '' }}"
                                        class="block py-4 px-0  w-full text-sm  text-gray-900 bg-transparent border-0
                                         border-b-2 border-yellow-600 appearance-none dark:text-dark
                                         dark:border-yellow-600 dark:focus:border-lime-800 focus:outline-none focus:ring-0 focus:border-lime-800 peer"
                                        placeholder=" " />
                                    <x-input-error class="mt-2" :messages="$errors->get('report_title')" />
                                    <label for="report_title"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-yellow-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-lime-800 peer-focus:dark:text-lime-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ __('Report/article title in Bulgarian language:') }}
                                    </label>
                                </div>

                                <!--Attach report -->
                                <div class="relative z-0 w-full mb-5 group">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-yellow-600" id="file_input_help">{{ __('Attach your report/article (for authors only, up to 2 MB) in Word') }}</p>
                                    <label for="report_file_path"
                                        class="opacity bg-white text-center rounded w-full sm:w-[360px] min-h-[160px] py-4 px-4 flex flex-col items-center justify-center cursor-pointer border-2 border-yellow-600 mx-auto font-[sans-serif] m-4">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mb-6 fill-yellow-600"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M22 13a1 1 0 0 0-1 1v4.213A2.79 2.79 0 0 1 18.213 21H5.787A2.79 2.79 0 0 1 3 18.213V14a1 1 0 0 0-2 0v4.213A4.792 4.792 0 0 0 5.787 23h12.426A4.792 4.792 0 0 0 23 18.213V14a1 1 0 0 0-1-1Z"
                                                data-original="#000000" />
                                            <path
                                                d="M6.707 8.707 11 4.414V17a1 1 0 0 0 2 0V4.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414Z"
                                                data-original="#000000" />
                                        </svg>
                                        <p class="text-yellow-600 font-semibold text-sm">{{ __('Drag & Drop or') }} <span
                                                class="text-lime-800">{{ __('Choose file') }}</span>{{ __(' to upload') }}</p>


                                        <input type="file" id="report_file_path" name="report_file_path" value="{{
                                        $form->report_file_path ?? '' }}"
                                               class="hidden"/>
                                        <x-input-error class="mt-2" :messages="$errors->get('report_file_path')" />

                                        <p class="text-xs text-yellow-600 mt-2">{{ __('Only Word documents are allowed.') }}</p>
                                    </label>

                                </div>


                                <!--Abstract of the report -->
                                <div class="relative z-0 w-full mb-5 group">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-yellow-600" id="report_details">{{ __
                                    ('Abstract of the report in Bulgarian language, 100 to 150 words (mandatory for authors):') }}</p>
                                    <textarea class=" input opacity custom-textarea " name="report_details" type="text"
                                              id=report_details  ></textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('report_details')" />
                                </div>

                                <!--Keywords -->
                                <div class="relative z-0 w-full mb-5 group">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-yellow-600" id="keywords">{{ __
                                    ('Keywords (mandatory for authors):') }}</p>
                                    <textarea class=" input opacity custom-textarea" name="keywords" type="text" id=keywords
                                    ></textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('keywords')" />
                                </div>

                                <!--Thematic ares you wish to participate in -->
                                <div class="relative z-0 w-full mb-5 group">
                                    <label for="thematic_area"
                                        class="block py-2.5 px-0 w-full text-sm  text-gray-500 dark:text-yellow-600">{{
                                        __('Thematic areas you wish to participate in:') }}</label>

                                    <select id="thematic_area" name="thematic_area"
                                        class="block py-2.5 px-0 w-full text-sm dark:hover:text-lime-800
                                        text-gray-500 bg-transparent border-0 border-b-2 border-yellow-600
                                        appearance-none dark:text-yellow-600 dark:border-yellow-600
                                        focus:outline-none focus:ring-0 focus:border-lime-800 peer" >
                                        <option value="" disabled selected hidden>{{ __('Select Thematic Area') }}</option>
                                        @foreach($thematicAreas as $thematicArea)
                                            <option value="{{ $thematicArea->id }}">{{ $thematicArea->getName
                                            }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('thematic_area')" />
                                </div>

                            </div>

                            <!--Receive a certificate-Yes or No -->
                            <div class="relative z-0 w-full mb-5 group">
                                <fieldset class="max-w-sm mx-auto">
                                    <label for="certificate"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-500
                                        dark:text-yellow-600">{{ __('Do you wish to receive a certificate of participation in the conference?') }}</label>

                                    <select id="certificate" name="certificate"
                                        class="block py-2.5 px-0 w-full text-sm dark:hover:text-lime-800
                                        text-gray-500 bg-transparent border-0 border-b-2  border-yellow-600
                                        appearance-none dark:text-yellow-600 dark:border-yellow-600 focus:outline-none focus:ring-0 focus:border-lime-800 peer">
                                        <option value="1">{{ __('Yes') }}</option>
                                        <option value="0" selected>{{ __('No') }}</option>
                                    </select>
                                </fieldset>
                            </div>

                            <!--Submit button -->
                            <div class="flex flex-col items-center">
                                <button type="submit"
                                    class="relative  inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium font-style: italic text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-lime-800 group-hover:from-cyan-500 group-hover:to-lime-800 hover:text-yellow-100 dark:text-blue-200 focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                                    <span
                                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-yellow-600 rounded-md group-hover:bg-opacity-0">

                                        {{ __('SUBMIT') }}

                                    </span>
                                </button>
                            </div>

                        </form>

                            <!--Footer -->
                        <footer class="flex flex-col space-y-10 justify-center m-10">
                            <div class="flex justify-center space-x-5">
                                <a href="https://www.facebook.com/voennaakademiageorgistoikovrakovski?_rdc=1&_rdr" target="_blank" rel="noopener noreferrer" title="Facebook">
                                    <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
                                </a>
                                <a href="https://www.linkedin.com/school/rakovski-ndc/" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                                    <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
                                </a>
                                <a href="https://www.instagram.com/rndcbg/" target="_blank" rel="noopener noreferrer" title="Instagram">
                                    <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
                                </a>
                                <a href="https://www.youtube.com/@armymediabg" target="_blank" rel="noopener noreferrer" title="YouTube">
                                    <img src="https://img.icons8.com/fluent/30/000000/youtube.png" />
                                </a>
                            </div>

                                <p class="text-center text-gray-700 font-medium">{{ __('Sofia, 1504 Boulevard "Evlogi and Hristo Georgievi" No. 82.') }}
                                    <br>+359 2/ 92 26 550<br>
                                    <br>rnda@armf.bg<br>
                                </p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function hideIfAuthor() {
        let participant = document.getElementById('participant_type').value;
        if(participant == '1'){
            document.getElementById('hideIfAuthor').style.display = 'block';
        } else {
            document.getElementById('hideIfAuthor').style.display = 'none';
        }
    }
    document.getElementById('hideIfAuthor').addEventListener('change', hideIfAuthor);

    hideIfAuthor();

    setTimeout(function() {
        let successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.remove();
        }
    }, 3000);

    document.querySelector('form').addEventListener('submit', function(event) {
        const fileInput = document.getElementById('report_file_path');
        if (!fileInput.files || fileInput.files.length === 0) {
            event.preventDefault();
            alert('Please select a file.');
        }
    });
</script>
