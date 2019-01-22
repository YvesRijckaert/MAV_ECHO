// {
//   const $main = document.querySelector('main');

//   const loadPage = url => {
//     return fetch(url, {
//       method: 'GET'
//     }).then(res => res.text());
//   };

//   const changePage = () => {
//     const url = window.location.href;

//     loadPage(url).then(responseText => {
//       const wrapper = document.createElement('section');
//       wrapper.innerHTML = responseText;

//       const oldContent = document.querySelector('.progress-header');
//       const newContent = wrapper.querySelector('.progress-header');

//       $main.appendChild(newContent);
//       animate(oldContent, newContent);
//     });
//   };

//   const animate = (oldContent, newContent) => {
//     oldContent.parentNode.removeChild(oldContent);
//   };

//   const init = () => {
//     document.addEventListener('click', e => {
//       let el = e.target;

//       while (el && !el.href) {
//         el = el.parentNode;
//       }

//       if (el) {
//         e.preventDefault();
//         history.pushState(null, null, el.href);
//         changePage();

//         return;
//       }
//     });
//     window.addEventListener('popstate', changePage);
//   };

//   init();
// }
