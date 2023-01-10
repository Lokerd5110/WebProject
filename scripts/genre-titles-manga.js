(() => {
    fetch(
      `${'http://webprojectback/?titleType=manga&func=getAll'}`,
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
        renderCards(data);
      })
      .catch((e) => alert(e));
})()

let addToWatched = (event) => {
  let email = document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1");
  if (event.target.getAttribute('title-id') != null && email != '') {
    fetch('http://webprojectback/?titleType=none&func=addToWatched', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(
        {
          "titleId": event.target.getAttribute('title-id'),
          "email": email
        },
      ),
    })
    .then((response) => {
      if (response.ok) {
        location.reload();
      } else {
        throw new Error();
      }
    })
    .catch((e) => e);
  }
}

(() => {
  let email = document.cookie.replace(/(?:(?:^|.*;\s*)email\s*\=\s*([^;]*).*$)|^.*$/, "$1")
  fetch (`http://webprojectback/?email=${email}&func=getWatched`,
  {
    method: 'GET',
  })
  .then((response) => {
    if (response.ok) {
      return response.json();
    }
    throw new Error();
  })
  .then((data) => {
    renderWatched(JSON.parse(data));
  })
  .catch((e) => e);
})()

let renderWatched = (data) => {
  let watchedList = document.querySelector('.continue-watching ul');

  data.forEach((item) => {
    if (item.titleType == 'manga') {
      let episodes = data.titleType == 'anime' ? '2 эпизод' : 'Манга';
      let stopped = data.titleType == 'anime' ? '13:45' : '7 глава';
      watchedList.innerHTML += `
      <div class="continue">
        <a href='#'><img src="${item.imagePath}" alt="" width="46" height="46"></a>
        <div class="title">
            <a href="#" class="titleName">${item.name}</a>
            <p class="content-series">${episodes}</p>
        </div>
        <p class="continue-from">${stopped}</p>
      </div>
      `;
    }
  });
}

let renderCards = (data) => {
  let genreTitles = document.getElementsByClassName('titles');

  for (let i = 0; i < genreTitles.length; i++) {
    let cardList = genreTitles[i].getElementsByClassName("small-card");
    for(let j = 0; j < cardList.length; j++) {

      cardList[j].querySelector(".rate p").innerHTML = data[j].rate;
      cardList[j].querySelector(".title-name").innerHTML = data[j].name;
      cardList[j].querySelector("object").innerHTML = `<a href="#" class="tag">${JSON.parse(data[j].genres)[0]}</a>`
      cardList[j].querySelector(".episodes").innerHTML = data[j].episodes + ' глав';
      cardList[j].style.backgroundImage = `url(${data[j].imagePath})`;
      cardList[j].setAttribute('title-id', data[j].id);
    }
  }
};

document.querySelectorAll('.titles').forEach(item => {
  item.addEventListener('click', addToWatched);
});