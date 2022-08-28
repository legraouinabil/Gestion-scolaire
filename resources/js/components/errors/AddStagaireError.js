import Validation from "../Admin/Validation";

export default class AddStagairError{
    constructor ( email , password ,f_name , l_name , phone){
        this.email = email;
       
        this.password = password;
        this.f_name = f_name;
        this.l_name = l_name; 
        this.phone =phone;

    }
    checkValidation(){
        let errors = [];

        if(!Validation.info(this.email ,this.password , this.f_name , this.l_name , this.phone )){
            errors['email'] = 'invalid email';
            errors['password'] = 'invalid password';
            errors['f_name'] = 'invalid f_name';
            errors['l_name'] = 'invalid l_name';
            errors['phone'] = 'invalid phone';
        }
      
        return errors;
    }
}