import Vue from "vue"
import { io } from "socket.io-client"

Vue.prototype.$socketEmit = function (topic, varargs) {
  return new Promise((resolve, reject) => {
    const arr = Array.from(arguments)
    let invoked = false
    const promiseLike = {
      resolve: (val) => {
        if (!invoked) {
          invoked = true
          resolve(val)
        }
      },
      reject: (val) => {
        if (!invoked) {
          invoked = true
          reject(val)
        }
      },
    }
    arr.push(promiseLike)
    this.$emit.apply(this, arr)
  })
}

export const socket = io('192.168.0.2:8081', {
  transports: ["websocket"],
})

