function repeater() {
  let $repeaterElement = $('.repeater_element__').children();
  let repeatCount = $('.repeater_element__').attr('data-repeat');

  for (let i = 0; i < repeatCount; i++) {
    $repeaterElement.clone().appendTo($repeaterElement.parent());
  }
}
repeater()