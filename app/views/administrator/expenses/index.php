<?php \Core\View::renderHeader()?>
<section class="columns is-full is-centered is-vertical catalog">
        <section class="column is-8 filter">
            <form style="position: absolute; margin-left: 12%;" action="main" method="POST" id="user">
                <h4>Пользователь: </h4>
                <div style="display:flex;">
                    <div class="select is-rounded is-small">
                        <select name="user">
                            <?php foreach ($users as $user):?>
                            <option value="<?=$user;?>" name="user">
                                <?=$user?>
                            </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="buttons" style="margin-left: 5%;">
                        <button class="button is-success is-light" type="submit">Выбрать</button>
                    </div>
                </div>
            </form>
             <section style='display:flex; margin: 10% 19% 0% 19%'>
                <?php foreach($expenses as $expense):?>
                <div style='margin-right: 25%;'>
                      <h2>Баланс: </h2>
                      <h1><?=$expense->balance?> RUB</h1>
                </div>
                <div>
                    <form method="POST" action="show">
                        <div>
                            <input type="hidden" value="<?=$expense->user_id?>" name="user">
                            <button class="button is-success is-light">Пополнить</button>
                        </div>
                    </form>
                    <form method="POST" action="history" style="margin-top: 10%">
                        <div>
                            <input type="hidden" value="<?=$expense->user_id?>" name="user">
                            <button class="button is-success is-light">История пополнений</button>
                        </div>
                    </form>
                </div>
                <?php endforeach;?>
            </section>
        </section>
</section>
<?php \Core\View::renderFooter()?>
