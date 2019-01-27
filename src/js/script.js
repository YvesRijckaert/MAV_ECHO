{
  const handleData = data => {
    document.querySelector('.calendar-section').innerHTML = data;
  };

  const handleCategoryChange = e => {
    const month = (new URL(document.location)).searchParams.get('month');
    const habit = e.currentTarget.value;

    const url = `index.php?page=overview&view=month&month=${month}&chosen_habit=${habit}`;
    console.log(url);

    fetch(`index.php?page=overview&view=month&month=01-2019&chosen_habit=${habit}`, {
      headers: new Headers({
        Accept: `application/json`
      })
    })
      .then(r => r.json())
      .then(data => handleData(data));
  };

  const init = () => {
    const categorySubmit = document.querySelector(`.calendar-habits-submit`);
    if (categorySubmit) {
      categorySubmit.remove();
    }

    document
      .querySelectorAll(`.calendar-habits-button`)
      .forEach(category =>
        category.addEventListener(`change`, handleCategoryChange)
      );
  };
  init();
}
