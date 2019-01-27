// {
//   const handleCategoryChange = e => {
//     const category = e.currentTarget.value;
//     fetch(`index.php?page=overview&view=month&month=01-2019$habit=${category}`, {
//       headers: new Headers({
//         Accept: `application/json`
//       })
//     })
//       .then(r => r.json())
//       .then(data => console.log(data));
//   };

//   const init = () => {
//     const categorySubmit = document.querySelector(`.calendar-habits-submit`);
//     if (categorySubmit) {
//       categorySubmit.remove();
//     }

//     document
//       .querySelectorAll(`.calendar-habits-button`)
//       .forEach(category =>
//         category.addEventListener(`change`, handleCategoryChange)
//       );
//   };
//   init();
// }
