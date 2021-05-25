<template>

        <select
        v-model="selected"
        @change="$emit('roomChanged',selected)"
       >
            <option v-for=" (chatRoom,index)  in chatRooms" :key="index"
                     :value="chatRoom">{{chatRoom.name}}</option>
        </select>
            <div id="show" @click="get()"></div>
</template>
<script>
export default {
    props: ['chatRooms', 'room'],
    data: function() {
        return {
            selected:'',
        }
    }, mounted:function(){
        var a=document.getElementById("show");
        setTimeout(function(){  a.click(); }, 100);
        a.click();
        console.log(a);
  },
     methods:{
        get() {
             this.selected=this.room;
             console.log(this.room);
        }
    },
}
</script>


