<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";?>

    

  <div class="">
    <!--
      Mobile filter dialog

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="fixed inset-0 flex z-40 sm:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "translate-x-full"
      -->


  
      <div class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-6 flex flex-col overflow-y-auto">
        <div class="px-4 flex items-center justify-between">
          <h2 class="text-lg font-medium text-gray-900">Filters</h2>
          <button type="button" class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Filters -->
        <form class="mt-4">
          <div class="border-t border-gray-200 px-4 py-6">
            <h3 class="-mx-2 -my-3 flow-root">
              <!-- Expand/collapse question button -->
              <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-0" aria-expanded="false">
                <span class="font-medium text-gray-900"> Category </span>
                <span class="ml-6 flex items-center">
                  <!--
                    Expand/collapse icon, toggle classes based on question open state.

                    Heroicon name: solid/chevron-down

                    Open: "-rotate-180", Closed: "rotate-0"
                  -->
                  <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
            </h3>
            <div class="pt-6" id="filter-section-0">
              <div class="space-y-6">
                <div class="flex items-center">
                  <input id="filter-mobile-category-0" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-0" class="ml-3 text-sm text-gray-500"> Tees </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-category-1" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-1" class="ml-3 text-sm text-gray-500"> Crewnecks </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-category-2" name="category[]" value="hats" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-2" class="ml-3 text-sm text-gray-500"> Hats </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-category-3" name="category[]" value="bundles" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-3" class="ml-3 text-sm text-gray-500"> Bundles </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-category-4" name="category[]" value="carry" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-4" class="ml-3 text-sm text-gray-500"> Carry </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-category-5" name="category[]" value="objects" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-category-5" class="ml-3 text-sm text-gray-500"> Objects </label>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6">
            <h3 class="-mx-2 -my-3 flow-root">
              <!-- Expand/collapse question button -->
              <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-1" aria-expanded="false">
                <span class="font-medium text-gray-900"> Brand </span>
                <span class="ml-6 flex items-center">
                  <!--
                    Expand/collapse icon, toggle classes based on question open state.

                    Heroicon name: solid/chevron-down

                    Open: "-rotate-180", Closed: "rotate-0"
                  -->
                  <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
            </h3>
            <div class="pt-6" id="filter-section-1">
              <div class="space-y-6">
                <div class="flex items-center">
                  <input id="filter-mobile-brand-0" name="brand[]" value="clothing-company" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-brand-0" class="ml-3 text-sm text-gray-500"> Clothing Company </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-brand-1" name="brand[]" value="fashion-inc" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-brand-1" class="ml-3 text-sm text-gray-500"> Fashion Inc. </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-brand-2" name="brand[]" value="shoes-n-more" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-brand-2" class="ml-3 text-sm text-gray-500"> Shoes &#039;n More </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-brand-3" name="brand[]" value="supplies-n-stuff" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-brand-3" class="ml-3 text-sm text-gray-500"> Supplies &#039;n Stuff </label>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6">
            <h3 class="-mx-2 -my-3 flow-root">
              <!-- Expand/collapse question button -->
              <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-2" aria-expanded="false">
                <span class="font-medium text-gray-900"> Color </span>
                <span class="ml-6 flex items-center">
                  <!--
                    Expand/collapse icon, toggle classes based on question open state.

                    Heroicon name: solid/chevron-down

                    Open: "-rotate-180", Closed: "rotate-0"
                  -->
                  <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
            </h3>
            <div class="pt-6" id="filter-section-2">
              <div class="space-y-6">
                <div class="flex items-center">
                  <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-0" class="ml-3 text-sm text-gray-500"> White </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-color-1" name="color[]" value="black" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-1" class="ml-3 text-sm text-gray-500"> Black </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-color-2" name="color[]" value="grey" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-2" class="ml-3 text-sm text-gray-500"> Grey </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-color-3" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-3" class="ml-3 text-sm text-gray-500"> Blue </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-color-4" name="color[]" value="olive" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-4" class="ml-3 text-sm text-gray-500"> Olive </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-color-5" name="color[]" value="tan" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-color-5" class="ml-3 text-sm text-gray-500"> Tan </label>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6">
            <h3 class="-mx-2 -my-3 flow-root">
              <!-- Expand/collapse question button -->
              <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-3" aria-expanded="false">
                <span class="font-medium text-gray-900"> Sizes </span>
                <span class="ml-6 flex items-center">
                  <!--
                    Expand/collapse icon, toggle classes based on question open state.

                    Heroicon name: solid/chevron-down

                    Open: "-rotate-180", Closed: "rotate-0"
                  -->
                  <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
            </h3>
            <div class="pt-6" id="filter-section-3">
              <div class="space-y-6">
                <div class="flex items-center">
                  <input id="filter-mobile-sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-0" class="ml-3 text-sm text-gray-500"> XS </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-1" class="ml-3 text-sm text-gray-500"> S </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-2" class="ml-3 text-sm text-gray-500"> M </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-3" class="ml-3 text-sm text-gray-500"> L </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-4" class="ml-3 text-sm text-gray-500"> XL </label>
                </div>

                <div class="flex items-center">
                  <input id="filter-mobile-sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="filter-mobile-sizes-5" class="ml-3 text-sm text-gray-500"> 2XL </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <main>
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="py-24 text-center">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>
          <p class="mt-4 max-w-3xl mx-auto text-base text-gray-500">Thoughtfully designed objects for the workspace, home, and travel.</p>
        </div>

        <!-- Filters -->
        <section aria-labelledby="filter-heading" class="border-t border-gray-200 pt-6">
          <h2 id="filter-heading" class="sr-only">Product filters</h2>

          <div class="flex items-center justify-between">
            <div class="relative z-10 inline-block text-left">
              <div>
                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                  Sort
                  <!-- Heroicon name: solid/chevron-down -->
                  <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

              <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div class="origin-top-left absolute left-0 z-10 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

                  <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-1"> Best Rating </a>

                  <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-2"> Newest </a>

                  <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-3"> Price: Low to High </a>

                  <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-4"> Price: High to Low </a>
                </div>
              </div>
            </div>

            <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
            <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button>

            <div class="hidden sm:flex sm:items-baseline sm:space-x-8">
              <div id="menu" class="relative z-10 inline-block text-left">
                <div>
                  <button type="button" class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                    <span>Category</span>

                    <span class="ml-1.5 rounded py-0.5 px-1.5 bg-gray-200 text-xs font-semibold text-gray-700 tabular-nums">1</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <!--
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <form class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-category-0" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Tees </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-category-1" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Crewnecks </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-category-2" name="category[]" value="hats" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Hats </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-category-3" name="category[]" value="bundles" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-3" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Bundles </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-category-4" name="category[]" value="carry" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-4" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Carry </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-category-5" name="category[]" value="objects" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-5" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Objects </label>
                    </div>
                  </form>
                </div>
              </div>

              <div id="menu" class="relative z-10 inline-block text-left">
                <div>
                  <button type="button" class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                    <span>Brand</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <!--
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <form class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-brand-0" name="brand[]" value="clothing-company" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-brand-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Clothing Company </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-brand-1" name="brand[]" value="fashion-inc" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-brand-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Fashion Inc. </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-brand-2" name="brand[]" value="shoes-n-more" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-brand-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Shoes &#039;n More </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-brand-3" name="brand[]" value="supplies-n-stuff" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-brand-3" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Supplies &#039;n Stuff </label>
                    </div>
                  </form>
                </div>
              </div>

              <div id="menu" class="relative z-10 inline-block text-left">
                <div>
                  <button type="button" class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                    <span>Color</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <!--
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <form class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> White </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-color-1" name="color[]" value="black" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Black </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-color-2" name="color[]" value="grey" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Grey </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-color-3" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-3" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Blue </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-color-4" name="color[]" value="olive" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-4" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Olive </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-color-5" name="color[]" value="tan" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-5" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Tan </label>
                    </div>
                  </form>
                </div>
              </div>

              <div id="menu" class="relative z-10 inline-block text-left">
                <div>
                  <button type="button" class="group inline-flex items-center justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                    <span>Sizes</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <!--
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <form class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> XS </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> S </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> M </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-3" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> L </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-4" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> XL </label>
                    </div>

                    <div class="flex items-center">
                      <input id="filter-sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-sizes-5" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> 2XL </label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Product grid -->
        <section aria-labelledby="products-heading" class="mt-8">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-01.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Focus Paper Refill</h3>
                <p>$13</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
            </a>

            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Focus Card Holder</h3>
                <p>$64</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
            </a>

            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg" alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Focus Carry Pouch</h3>
                <p>$32</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">Heather Gray</p>
            </a>

            <!-- More products... -->
          </div>
        </section>

        <section aria-labelledby="featured-heading" class="relative mt-16 rounded-lg overflow-hidden lg:h-96">
          <div class="absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-featured-collection.jpg" alt="" class="w-full h-full object-center object-cover">
          </div>
          <div aria-hidden="true" class="relative w-full h-96 lg:hidden"></div>
          <div aria-hidden="true" class="relative w-full h-32 lg:hidden"></div>
          <div class="absolute inset-x-0 bottom-0 bg-black bg-opacity-75 p-6 rounded-bl-lg rounded-br-lg backdrop-filter backdrop-blur sm:flex sm:items-center sm:justify-between lg:inset-y-0 lg:inset-x-auto lg:w-96 lg:rounded-tl-lg lg:rounded-br-none lg:flex-col lg:items-start">
            <div>
              <h2 id="featured-heading" class="text-xl font-bold text-white">Workspace Collection</h2>
              <p class="mt-1 text-sm text-gray-300">Upgrade your desk with objects that keep you organized and clear-minded.</p>
            </div>
            <a href="#" class="mt-6 flex-shrink-0 flex bg-white bg-opacity-0 py-3 px-4 border border-white border-opacity-25 rounded-md items-center justify-center text-base font-medium text-white hover:bg-opacity-10 sm:mt-0 sm:ml-8 lg:ml-0 lg:w-full">View the collection</a>
          </div>
        </section>

        <section aria-labelledby="more-products-heading" class="mt-16 pb-24">
          <h2 id="more-products-heading" class="sr-only">More products</h2>

          <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-07.jpg" alt="Close up of long kettle spout pouring boiling water into pour-over coffee mug with frothy coffee." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Electric Kettle</h3>
                <p>$149</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">Black</p>
            </a>

            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-08.jpg" alt="Extra large black leather workspace pad on desk with computer, wooden shelf, desk organizer, and computer peripherals." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Leather Workspace Pad</h3>
                <p>$165</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">Black</p>
            </a>

            <a href="#" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-09.jpg" alt="Leather long wallet held open with hand-stitched card dividers, full-length bill pocket, and simple tab closure." class="w-full h-full object-center object-cover group-hover:opacity-75">
              </div>
              <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                <h3>Leather Long Wallet</h3>
                <p>$118</p>
              </div>
              <p class="mt-1 text-sm italic text-gray-500">Natural</p>
            </a>

            <!-- More products... -->
          </div>
        </section>
      </div>
    </main>
    <?php require_once "./views/partials/footer.php";
?>