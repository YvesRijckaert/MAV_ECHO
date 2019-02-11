{
  const handleData = data => {
    document.querySelector('.main-overview-month .main-overview-month-calendar').innerHTML = data.calendar[0];
    document.querySelector('.main-overview-month .month-info-chosenHabit').innerHTML = data.info;
    document.querySelector('.main-overview-month .month-info-totalDays').innerHTML = `total: ${data.calendar[1]} days`;
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

  const handleChangeRepetitive = e => {
    switch (e.target.name) {
    case 'chosen_repetitive_goal_day':
      document.querySelector(`.repetitive-day`).innerHTML = e.target.value;
      break;
    case 'chosen_repetitive_goal_month':
      document.querySelector(`.repetitive-month`).innerHTML = e.target.value;
      break;
    default:
      break;
    }
  };

  const handleChangeStreak = e => {
    document.querySelector(`.streak-amount`).innerHTML = `${e.target.value} days`;
  };

  const handleChangeTotal = e => {
    switch (e.target.name) {
    case 'chosen_total_goal_month':
      document.querySelector(`.total-month`).innerHTML = e.target.value;
      break;

    default:
      break;
    }
  };

  const init = () => {
    //AJAX CALENDAR
    const categorySubmit = document.querySelector(`.month-form-submit`);
    if (categorySubmit) {
      categorySubmit.remove();
    }
    document
      .querySelectorAll(`.month-form-input`)
      .forEach(category =>
        category.addEventListener(`change`, handleCategoryChange)
      );

    //AJAX ADD GOALS
    const $exampleText = document.querySelector(`.add-goals-example`),
      $repetitiveForm = document.querySelector(`.add-goal-repetitive-form`),
      $streakForm = document.querySelector(`.add-goal-streak-form`),
      $totalForm = document.querySelector(`.add-goal-total-form`);
    if ($exampleText) {
      $exampleText.remove();
    }
    if ($repetitiveForm) {
      $repetitiveForm.addEventListener(`change`, handleChangeRepetitive);
    }
    if ($streakForm) {
      $streakForm.addEventListener(`change`, handleChangeStreak);
    }
    if ($totalForm) {
      $totalForm.addEventListener(`change`, handleChangeTotal);
    }
  };
  init();
}
