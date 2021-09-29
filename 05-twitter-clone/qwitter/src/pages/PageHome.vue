<template>
  <q-page>
    <div class="q-py-lg q-px-md row items-end q-col-gutter-md">
      <div class="col">
        <q-input bottom-slots v-model="newQweetContent" class="new-qweet" label="What's happening?" counter maxlength="280" autogrow>
        <template v-slot:before>
          <q-avatar size="xl">
            <img src="https://cdn.quasar.dev/img/avatar5.jpg">
          </q-avatar>
        </template>
      </q-input></div>
      <div class="col col-shrink ">
          <q-btn @click="addNewQweet" :disable="!newQweetContent" class="q-mb-lg" unelevated rounded no-caps autogrow color="primary" label="Qweet" />
      </div>
    </div>
    <q-separator class="divider" size="10px" color="grey-2"></q-separator>

    <q-list separator>
      <q-item v-for="qweet in qweets" :key="qweet.date" class="q-py-md" >
        <q-item-section avatar top>
          <q-avatar size="xl">
            <img src="https://cdn.quasar.dev/img/avatar2.jpg">
          </q-avatar>
        </q-item-section>

        <q-item-section>
          <q-item-label class="text-subtitle1">
            <strong>SangHoon Kim</strong>
            <span class="text-grey-7">
              @sanghoon__kim
            </span>
          </q-item-label>
          <q-item-label class="qweet-content text-body1">
            {{ qweet.content }}
          </q-item-label>
          <div class="qweet-icons row justify-between q-mt-sm">
            <q-btn flat round color="grey" icon="far fa-comment" size="sm"/>
            <q-btn flat round color="grey" icon="fas fa-retweet" size="sm"/>
            <q-btn flat round color="grey" icon="far fa-heart" size="sm"/>
            <q-btn flat round color="grey" icon="fas fa-trash" size="sm"/>
          </div>
        </q-item-section>

        <q-item-section side top>
          <!-- {{ qweet.date | relativeDate }} -->
          date
        </q-item-section>
      </q-item>

      <q-separator inset="item" />

    </q-list>
  </q-page>
</template>

<script>
import { formatDistance } from 'date-fns'

export default {
  name: 'PageHome',
  data () {
    return {
      newQweetContent: '',
      qweets: [
        {
          content: 'Quibusdam eos minus asperiores reiciendis illum aliquam suscipit totam earum tempora architecto non autem ratione, soluta ad, esse sunt magni sint natus!',
          date: 123124124124
        },
        {
          content: 'Quibusdam eos minus asperiores reiciendis illum aliquam suscipit totam earum tempora architecto non autem ratione, soluta ad, esse sunt magni sint natus!',
          date: 124124124
        },
        {
          content: 'Quibusdam eos minus asperiores reiciendis illum aliquam suscipit totam earum tempora architecto non autem ratione, soluta ad, esse sunt magni sint natus!',
          date: 1245124124124
        }
      ]
    }
  },
  methods: {
    addNewQweet () {
      const newQweet = {
        content: this.newQweetContent,
        date: Date.now()
      }
      this.qweets.unshift(newQweet)
    }
  },
  filters: {
    relativeDate (value) {
      return formatDistance(value, new Date())
    }
  }
}
</script>
<style>
.new-qweet{
  font-size: 19px;
  line-height: 1.4 !important;
}
.divider{
  border-top: 1px solid;
  border-bottom: 1px solid;
  border-color: rgb(233, 233, 233);
}
.qweet-content{
  white-space: pre-line;
}
.qweet-icons {
  margin-left: -5px;
}
</style>
