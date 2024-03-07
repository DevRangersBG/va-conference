<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fees') }}
        </h2>

    </x-slot>
    <div class="bg-contain bg-left-top bg-[url('https://img.hotimg.com/MA1.jpeg')]">

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="opacity bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <ul class="list-disc my-10 text-justify">

  <li>{{ __('The maximum number of papers that each author can pay (alone or in co-authorship) is two;') }}</li>
  <li>{{ __('The deadline for payment of the papers for participation in the scientific conference is determined after confirmation of approval for publication of the report, but not later than 22.03.2024;') }}</li>
  <li>{{ __('The fee for participation with one paper in the scientific conference for external participants is 50 BGN including VAT. The co-authors of the papers pay a fee in full.') }}</li>
  <li>{{ __('The fee for participation in the scientific conference for learners is 30 BGN including VAT;') }}</li>
  <li>{{ __('The fee for participation without a paper in the scientific conference for external participants is 30 BGN including VAT;') }}</li>
  <li>{{ __('The fees are transferred to the bank account of the Military Academy "G. S. Rakovski":') }}</li>
</ul>




  <p class="text-justify mt-4">{{ __('Beneficiary: Military Academy "G. S. Rakovski"') }}</p>
  <p class="text-justify">{{ __('Address of the beneficiary: Sofia 1504, bul. "Evlogi and Hristo Georgievi" No 82') }}</p>
  <p class="text-justify">{{ __("Beneficiary's Bank: BNB") }} </p>
  <p class="text-justify">{{ __('BIC: BNBGBGSD') }}</p>
  <p class="text-justify">{{ __('IBAN: BG40BNBG96613100152401') }}</p>



                </div>
            </div>
        </div>
    </div>
    </div>
    <!--<footer>
    <img class="h-auto max-w-lg mx-auto" src="https://rndc.bg/wp-content/uploads/2022/12/logo-menu-1.png" alt="military academy logo">


    </footer> -->


</x-app-layout>


