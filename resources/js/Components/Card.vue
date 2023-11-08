<template>
    <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
        <div class="">
            <slot name="head">
               
            </slot>
           
        </div>
       
            <slot name="content1">
             
            </slot>
            <slot name="content2" >
             
            </slot>
    
            <slot name="footer">
              
            </slot>
       
    </div>
   
   
</template>