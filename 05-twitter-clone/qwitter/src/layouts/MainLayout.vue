<template>
  <q-layout view="lHr lpR fFf">

    <q-header bordered class="bg-white text-black">
      <q-toolbar>
        <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />

        <q-toolbar-title class="text-weight-bold">
          <span class="gt-sm">{{ $route.name }}</span>
          <q-icon class="q-pa-md lt-md absolute-center" name="fas fa-dove" size="sm" color="primary"/>
        </q-toolbar-title>

      </q-toolbar>
    </q-header>

    <q-drawer show-if-above v-model="leftDrawerOpen" side="left" :width="283" bordered>
      <q-icon class="q-pa-md" name="fas fa-dove" size="lg" color="primary"/>
      <q-list bordered>
        <q-item to="/" clickable v-ripple exact>
          <q-item-section avatar>
            <q-icon name="home" size="md" />
          </q-item-section>

          <q-item-section class="text-h6">Home</q-item-section>
        </q-item>

        <q-item to="/about" clickable v-ripple>
          <q-item-section avatar>
            <q-icon name="help" size="md" />
          </q-item-section>

          <q-item-section class="text-h6">About</q-item-section>
        </q-item>
      </q-list>
    </q-drawer>

    <q-drawer show-if-above v-model="rightDrawerOpen" side="right" bordered>
      <!-- drawer content -->
      <q-input class="q-ma-md" color="purple-12" outlined rounded label="Label" dense>
        <template v-slot:prepend>
          <q-icon name="search" />
        </template>
      </q-input>
      <q-list>
        <q-item>
          <q-item-section>
            <q-item-label class="text-gray" overline>Education</q-item-label>
            <q-item-label class="text-weight-bold">Something amazing happened!</q-item-label>
            <q-item-label caption lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
          </q-item-section>

          <q-item-section side top>
            <q-item-label caption>5 min ago</q-item-label>
            <q-icon name="star" color="yellow" />
          </q-item-section>
        </q-item>
        <q-separator spaced inset />

        <q-item>
          <q-item-section>
            <q-item-label class="text-gray" overline>Education</q-item-label>
            <q-item-label class="text-weight-bold">Something amazing happened!</q-item-label>
            <q-item-label caption lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
          </q-item-section>

          <q-item-section side top>
            <q-item-label caption>5 min ago</q-item-label>
            <q-icon name="star" color="yellow" />
          </q-item-section>
        </q-item>
        <q-separator spaced inset />

        <q-item>
          <q-item-section>
            <q-item-label class="text-gray" overline>Education</q-item-label>
            <q-item-label class="text-weight-bold">Something amazing happened!</q-item-label>
            <q-item-label caption lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
          </q-item-section>

          <q-item-section side top>
            <q-item-label caption>5 min ago</q-item-label>
            <q-icon name="star" color="gray" />
          </q-item-section>
        </q-item>
        <q-separator spaced inset />
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
import { ref } from 'vue'

export default {
  setup () {
    const leftDrawerOpen = ref(false)
    const rightDrawerOpen = ref(false)

    return {
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      },

      rightDrawerOpen,
      toggleRightDrawer () {
        rightDrawerOpen.value = !rightDrawerOpen.value
      }
    }
  }
}

</script>
