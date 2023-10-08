// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// import vueCounter from "./vueCounter";
 import { createApp } from "vue/dist/vue.esm-bundler";
createApp({
    setup() {
        // カウンターを更新する
        const { counter } = vueCounter();
        return {
            counter,
        };
    },
}).mount("#counter");

// import { User } from "./types";
// let user = <User>{
    // id: 1,
    // name: "chigusa",
    // email: "chigusa@xxxx",
// };
// console.log(user);