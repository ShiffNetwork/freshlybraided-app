<template>
    <nav class="bg-white dark:bg-gray-900 p-5 shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
          <a href="/">
            <span class="text-2xl text-gray-700 dark:text-white cursor-pointer">
                Freshly Braided
            </span>
          </a>

            <span id="menu" class="text-3xl text-gray-700 dark:text-white cursor-pointer mx-2 md:hidden block">
                <ion-icon :name="elementName" v-on:click="switchElementName"></ion-icon>
            </span>
        </div>
        <ul ref="menulist" :class="elementClasses">
            <li class="mx-4 my-6 md:my-0">
                <Link :href="route('appointment.index')" class="nav-link">Appointments</Link>
            </li>
            <li class="mx-4 my-6 md:my-0">
              <Link :href="route('hairstyle.index')" class="nav-link">Hairstyles</Link>
            </li>
            <li class="mx-4 my-6 md:my-0">
              <Link :href="route('index.users')" class="nav-link">Clients</Link>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl text-gray-700 dark:text-white hover:text-gray-300 dark:hover:text-gray-400 duration-500">
                  <ion-icon name="log-out-outline"></ion-icon>
                </a>
            </li>
            
        </ul>
    </nav>

    <slot></slot>
</template>

<script>

export default {
  data() {
    return {
      elementName: 'menu-outline',
      elementClasses: 'md:flex md:items-center md:z-auto md:dark:static absolute w-full left-0 dark:bg-gray-900 md:w-auto md:p-y py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500',
      elementClasses2: 'md:flex md:items-center md:z-auto md:dark:static absolute w-full left-0 dark:bg-gray-900 md:w-auto md:p-y py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 opacity-100 top-[80px]'
    };
  },
  methods: {
    switchElementName() {
      const element = this.$refs.menulist;
      
      
      if (this.elementName === 'menu-outline' && this.elementClasses == 'md:flex md:items-center md:z-auto md:dark:static absolute w-full left-0 dark:bg-gray-900 md:w-auto md:p-y py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500') {
        this.elementName = 'close-outline';
        this.elementClasses = this.elementClasses2
      } else {
        this.elementName = 'menu-outline';
        this.elementClasses = 'md:flex md:items-center md:z-auto md:dark:static absolute w-full left-0 dark:bg-gray-900 md:w-auto md:p-y py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500'
      }
    }
  }
};
</script>

<script setup>
import {Link} from '@inertiajs/vue3'
</script>