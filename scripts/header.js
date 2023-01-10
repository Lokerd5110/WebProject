(() => {
    let popUpButton = document.querySelector(".header .profile button");
    let popUp = document.querySelector(".header .pop-up");
    let switchToRegister = document.getElementById("register-button");
    let registerForm = document.querySelector(".header .pop-up .form.register");
    let switchToLogin = document.getElementById("login-button");
    let loginForm = document.querySelector(".header .pop-up .form.login");
    let registerUserButton = document.querySelector(".header .register button");
    let loginUserButton = document.querySelector(".header .login button");
    let exitPopUp = document.querySelector(".header .exit-pop-up");
    let exitAccountButton = document.getElementById('exit');
    let deleteAccountButton = document.getElementById('delete-account');

    let email = document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    let openPopUp = () => {
        popUp.style.display = 'flex';
    };

    let closePopUp = (event) => {
        if (event.target.classList[0] == 'pop-up') {
            popUp.style.display = 'none'
        }
    }

    let switchRegister = () => {
        switchToRegister.classList.add('active');
        switchToLogin.classList.remove('active');
        registerForm.style.display = 'flex';
        loginForm.style.display = 'none';
    }

    let switchLogin = () => {
        switchToRegister.classList.remove('active');
        switchToLogin.classList.add('active');
        registerForm.style.display = 'none';
        loginForm.style.display = 'flex';
    }

    let register = () => {
        let email = document.querySelector('.header .register input[name="email"]').value;
        let password = document.querySelector('.header .register input[name="password"]').value;
        let passwordRepeat = document.querySelector('.header .register input[name="password-repeat"]').value;
        let userLogin = document.querySelector('.header .register input[name="login"]').value;

        fetch('http://webprojectback/?titleType=none&func=register', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(
              {
                name: userLogin,
                email: email,
                password: password,
                passwordRepeat: passwordRepeat
              },
            ),
          })
            .then((response) => {
              if (response.ok) {
                document.cookie = `email=${email}`;
                location.reload();
              } else {
                throw new Error();
              }
            })
            .catch((e) => e);
    }

    let login = () => {
        let email = document.querySelector('.header .login input[name="email"]').value;
        let password = document.querySelector('.header .login input[name="password"]').value;

        fetch('http://webprojectback/?titleType=none&func=login', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(
              {
                email: email,
                password: password,
              },
            ),
          })
            .then((response) => {
              if (response.ok) {
                document.cookie = `email=${email}`;
                location.reload();
              } else {
                throw new Error();
              }
            })
            .catch((e) => e);
    }
    
    (() => {
        if (email != '')
        fetch(
            `http://webprojectback/?titleType=none&func=getUserName&email=${email}`,
            {
              method: 'GET',
            },
          )
            .then((response) => {
              if (response.ok) {
                return response.json();
              }
              throw new Error();
            })
            .then((data) => {
              if (data != '') {
                let name = document.querySelector(".header .profile button");
                name.innerHTML = `<span>Здравствуйте,</span> ${data}`;
              }
            })
            .catch((e) => e);
    })()

    let openExitPop = () => {
      exitPopUp.style.display = 'flex';
    }

    let closeExitPopUp = (event) => {
      if (event.target.classList[0] == 'exit-pop-up') {
        exitPopUp.style.display = 'none'
      }
    }

    let exit = () => {
      document.cookie = "email=";
      location.reload();
    }

    let deleteAccount = () => {
      if (email != '') {
        fetch(`http://webprojectback/?func=deleteUser&email=${email}`, {
          method: 'DELETE'
        })
        .then((response) => {
          if (response.ok) {
            return response.json();
          }
          throw new Error();
        })
        exit();
      }
    }

    if (document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1") == '')
    popUpButton.addEventListener("click", openPopUp);
    else
    popUpButton.addEventListener("click", openExitPop);
    popUp.addEventListener('click', closePopUp);
    exitPopUp.addEventListener('click', closeExitPopUp);
    switchToRegister.addEventListener('click', switchRegister);
    switchToLogin.addEventListener('click', switchLogin);
    loginUserButton.addEventListener('click', login);
    registerUserButton.addEventListener('click', register);
    exitAccountButton.addEventListener('click', exit);
    deleteAccountButton.addEventListener('click', deleteAccount);
})()