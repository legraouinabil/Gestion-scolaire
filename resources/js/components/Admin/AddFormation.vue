<template lang="pug">
    <div>
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                 <h5 v-if="edit" class="modal-title">Edit formation</h5>
                  <h5  v-else class="modal-title">Add formation</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
               </div>
               <div class="modal-body">
                 <div class="form-group">
                   <label for="">formation name</label>
                   <input type="text" name="" id="" :class="['form-control' , errors.name?'is-invalid' :'']" placeholder="" aria-describedby="helpId" v-model="formation.name">
                   <small id="helpId" class="text-muted">Help text</small>
                 </div>
                 <div class="form-group">
                  <label for="">formation description</label>
                <textarea name="" id="" cols="30" rows="10" :class="['form-control' ,errors.name?'is-invalid' :'']" v-model="formation.description">


                </textarea>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                   <button  v-if="edit" type="button" class="btn btn-primary" @click="updateFormation">Update</button>
                  <button  v-else type="button" class="btn btn-primary" @click="addFormation">Save</button>

               </div>
            </div>
         </div>
        </div>
    </div>

</template>
<script>
export default {
   props : ['formations']
}
</script>