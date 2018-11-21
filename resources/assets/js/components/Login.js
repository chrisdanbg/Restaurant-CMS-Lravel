import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import validator from 'validator';

export default class Login extends Component {
  state = { email: '', password: '', errors: {}};

  handleFieldChange = (event) => {
    this.setState({
      [event.target.name]: event.target.value
    });
  }

  validateUserInput = (userdata) => {
    let errors = { email: [], password: []};
    if (!userdata.email) {
      errors.email.push('The email is required')
    }

    if (!userdata.password) {
      errors.password.push('The password is required')
    }

    if (!validator.isEmail(userdata.email)) {
      errors.email.push('Please enter valid email')
    }

    if (userdata.password.length < 8) {
      errors.password.push('The password must be at least 8 characters')
    }

    return errors;
  }

  handleFormSubmit = (event) => {
    event.preventDefault();

    const errors = this.validateUserInput(this.state);
    if(errors.email.length > 0 || errors.password.length > 0) {
      this.setState({
        errors
      })
      return;
    }

    axios.post('/login', this.state).then(response => {
      window.location = '/';
    }).catch(error => {
      this.setState({
        errors: error.response.data.errors
      })
    });
  };

  renderErrorsFor = field => {
    if (this.state.errors[field]) {
      return this.state.errors[field].map(error => (
        <span key={error} >
          <small style={{color: "#E27C3E"}}>{error}</small><br></br>
        </span>
      ))
    }
  };

    render() {
       return (
      <div className="container my-5">
        <div className="row justify-content-center">
          <div className="col-md-8 col-lg-8 col-xs-12">
            <div className="card" style={{marginTop: 120}}>
              <div className="card-body">
                <form onSubmit={this.handleFormSubmit}>
                  <h3 className="text-center my-5">Login</h3>
                  <div className="form-group row">
                    <label htmlFor="staticEmail" className="col-sm-3 col-form-label">Email</label>
                    <div className="col-sm-9">
                      <input className="form-control" id="staticEmail" placeholder="email@example.com" type="text" name="email" onChange={this.handleFieldChange}/>
                      {this.renderErrorsFor('email')}
                    </div>
                  </div>
                  <div className="form-group row">
                    <label htmlFor="inputPassword" className="col-sm-3 col-form-label">Password</label>
                    <div className="col-sm-9">
                      <input className="form-control" id="inputPassword" placeholder="Password" type="password" name="password" onChange={this.handleFieldChange}/>
                      {this.renderErrorsFor('password')}
                    </div>
                  </div>
                  <div className="form-group row">
                    <label htmlFor="inputPassword" className="col-sm-3 col-form-label" />
                    <div className="col-sm-9">
                      <button className="btn btn-primary form-control" type="submit">Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    );
    }
}

if (document.getElementById('login')) {
    ReactDOM.render(<Login />, document.getElementById('login'));
}
