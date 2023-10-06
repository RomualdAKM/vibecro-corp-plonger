import { defineStore } from 'pinia'

export const useLocation = defineStore('location', {
    state: () => {
        return {

          useLang: 'fr',
          
        }
     },
  })
