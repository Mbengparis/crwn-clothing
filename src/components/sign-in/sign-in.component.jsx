import React from 'react';
import './sign-in.styles.scss'
import FormInput from './../form-input/form-input.component'
import CustomButton from './../custom-button/custom-button.component'
import { signInWithGoogle } from '../../firebase/firebase.utils';

class SignIn extends React.Component{
constructor(props){
super(props);
this.state ={
    email: '',
    password: ''
}
}
handleChange=(event)=>{
    const {name, value} = event.target
    this.setState({[name]: value})
}


handleSubmit =(event)=>{
this.setState({email:'', password:''} )

event.preventDefault();
}

render(){
    return(
     <div className='sign-in'>
            <h2>I already have an accout</h2>
            <span>Sing in with your email and password</span>
        
         <form onSubmit={this.handleSubmit} >
           <FormInput 
           type="email" 
           name='email'
           handleChange={this.handleChange} 
           value={this.state.email} 
           label='email'
           required 
           />
           <FormInput 
           type="password" 
           name='password' 
           label='password'
           value={this.state.password} 
           handleChange={this.handleChange}
           required
           />
           <div className='buttons'>
           <CustomButton type="submit"> Sign in </CustomButton>
           <CustomButton onClick={signInWithGoogle} isGoogleSignIn> 
           Sign in with Google </CustomButton>
           </div>
         </form>  
    </div>
    )
}
}


export default SignIn;