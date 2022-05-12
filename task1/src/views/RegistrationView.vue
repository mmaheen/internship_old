<template>
    <form @submit="onSubmit" class="add-form">
    <div class="form-control">
      <label>Name</label>
      <input type="text" v-model="form.name" name="name" placeholder="Enter Your Name" />
    </div>
    <div class="form-control">
      <label>Age</label>
      <input
        type="text"
        v-model="form.age"
        name="age"
        placeholder="Enter Your Age"
      />
    </div>
    <input type="submit" value="Save Information" class="btn btn-block" />
  </form>
</template>

<script>
    export default {
        name : 'AddInformation',
        data (){
            return {
                name : '',
                age : '',
                form:{
                  age:'',
                  name:''
                }
            }
        },
        methods : {
            onSubmit(e){
                e.preventDefault()
                console.log(this.form);
            }
        }
    }
</script>