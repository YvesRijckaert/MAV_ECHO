{
  const handleData = data => {
    document.querySelector('.main-overview-month-calendar').innerHTML = data;
  };

  const handleCategoryChange = e => {
    const month = (new URL(document.location)).searchParams.get('month');
    const habit = e.currentTarget.value;
    fetch(`index.php?page=overview&view=month&month=${month}&chosen_habit=${habit}`, {
      headers: new Headers({
        Accept: `application/json`
      })
    })
      .then(r => r.json())
      .then(data => handleData(data));
  };

  const init = () => {
    const categorySubmit = document.querySelector(`.month-form-submit`);
    if (categorySubmit) {
      categorySubmit.remove();
    }

    document
      .querySelectorAll(`.month-form-input`)
      .forEach(category =>
        category.addEventListener(`change`, handleCategoryChange)
      );
  };
  init();
}
