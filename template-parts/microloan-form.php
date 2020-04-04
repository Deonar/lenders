<div class="steps-form">
  <div class="steps-form__container">
    <div class="progress progress_35 mb-20" id="progress">
      <p class="progress__text">
        Получите <b>35% к вероятности одобрения,</b> заполнив 1й шаг
      </p>
    </div>
    
    <div class="steps-form__wrapper" id="steps-form_1">
      <p class="text-center">
        <b>+16%</b> за заполнение поля <b>ФИО</b>
      </p>
      <div class="form-input">
        <select name="date" class="custom-select">
          <option value="" disabled selected hidden>Для чего вам нужен микрозайм *</option>
          <option value="Покупки">Покупки</option>
          <option value="Погашения кредита">Погашения кредита</option>
          <option value="Покупки прочие">Покупки прочие</option>
        </select>
      </div>

      <div class="form-range">
        <input type="text" id="credit-limit">
        <label>Желаемый кредитный лимит *</label>
        <div id="credit-limit-range"></div>
      </div>

      <div class="form-range">
        <input type="text" id="credit-term">
        <label>Желаемый срок кредита *</label>
        <div id="credit-term-range"></div>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Фамилия, имя, отчество *</label>
      </div>

      <div class="form-input">
        <input type="email">
        <label>Электронная почта *</label>
      </div>
      
      <div class="btn-next mb-30">
        <button href="#" class="btn btn_hover btn-accent">
          Далее
        </button>
      </div>  
      
    </div>

    <div class="steps-form__wrapper hidden" id="steps-form_2">
      <p class="text-center">
        <b>+1%</b> за заполнение поля <b>Серия и номер</b>
      </p>
      
      <div class="steps-form__title mb-20">
        Паспортные данные
      </div>
      <div class="form-input">
        <input type="text">
        <label>Серия и номер *</label>
      </div>
      
      <div class="form-input">
        <input type="text">
        <label>Дата рождения*</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Место рождения *</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Код подразделения *</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Дата выдачи *</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Кем выдан *</label>
      </div>
      
      <div class="btn-next mb-30">
        <a href="#" class="btn btn_hover btn-accent">
          Далее
        </a>
      </div>  
      
    </div>

    <div class="steps-form__wrapper hidden" id="steps-form_3">
      <p class="text-center">
        <b>+1%</b> за заполнение поля <b>Серия и номер</b>
      </p>
      
      <p class="steps-form__title mb-20">
        Адрес постоянной регистрации
      </p>
      <div class="form-input">
        <input type="text">
        <label>Индекс *</label>
      </div>
      
      <div class="form-input">
        <input type="text">
        <label>Регион *</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Район или город *</label>
      </div>

      <div class="form-input">
        <input type="text">
        <label>Улица *</label>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="form-input">
            <input type="text">
            <label>Дом *</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-input">
            <input type="text">
            <label>Корпус *</label>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-6">
          <div class="form-input">
            <input type="text">
            <label>Строение *</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-input">
            <input type="text">
            <label>Квартира *</label>
          </div>
        </div>
      </div>

      <p class="steps-form__title mb-20">
        Адрес фактического проживания
      </p>
      
      <div class="privacy-form mb-20">
          <input type="checkbox" id="check" checked name="check" />
          <label for="check" class="">Совпадает с адресом регистрации</label>
      </div>

      <div class="mb-30">
        <a href="#code-popup" class="btn btn_hover btn-accent popup-thank">
          Оформить
        </a>
      </div>  
      
    </div>

  </div>
</div>