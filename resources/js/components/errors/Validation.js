export default class Validation {
    static info( f_name , l_name , email , password , phone){
      if( !email == ""  && !f_name == "" &&!l_name == ""  && !phone == "" && !password == "" ) {
            return true ;
        }
        return false;
    }


    static minLength(name , minLength){
        if(name.length < minLength){
            return false;
        }
        return true;
    }
}