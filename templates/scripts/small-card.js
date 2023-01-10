(() => {
    fetch(
      `${'http://webprojectback/?titleType=anime&func=getAll'}`,
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
        console.log(data);
      })
      .catch((e) => alert(e));
})()