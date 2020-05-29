
 <div class="col-md-4">
                    <div class="jumbotron"  id="menubar"> 
                        <div class="container" >
                            <div class="row">
                                <div class="col-xs-2">
<star-rating @rating-selected="rating = $event" :rating="rating"></star-rating>

                                    <ul class="nav flex-column" id="menubar2"      >
                                        <li class="nav-item"><a href="ganrrrБоевики" class="1" v-on:click="makeActive('1')">боевик</a></li>
                                        <!-- <li class="nav-item"><a href="ganrrr" class="2" v-on:click="makeActive('2')">аниме</a></li> -->
                                        <li class="nav-item"><a href="ganrrrБиография" class="3" v-on:click="makeActive('3')">биографический</a></li>
                                        <!-- <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">военный</a></li> -->
                                        <li class="nav-item"><a href="ganrrrДетективы" class="4" v-on:click="makeActive('5')">детектив</a></li>
                                        <li class="nav-item"><a href="ganrrrДокументальные" class="4" v-on:click="makeActive('4')">документальный</a></li>
                                        <li class="nav-item"><a href="ganrrrДрамы" class="4" v-on:click="makeActive('4')">драма</a></li>
                                        <li class="nav-item"><a href="ganrrrИсторические" class="4" v-on:click="makeActive('4')">исторический</a></li>
                                        <li class="nav-item"><a href="ganrrrКомедии" class="4" v-on:click="makeActive('4')">комедия</a></li>
                                        <li class="nav-item"><a href="ganrrrКриминальные" class="4" v-on:click="makeActive('4')">криминал</a></li>
                                        <li class="nav-item"><a href="ganrrrМелодрамы" class="4" v-on:click="makeActive('4')">мелодрама</a></li>
                                        <li class="nav-item"><a href="ganrrrФэнтези" class="4" v-on:click="makeActive('4')">фэнтези</a></li>
                                       <!--  <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">научный</a></li> -->
                                        <li class="nav-item"><a href="ganrrrПриключения" class="4" v-on:click="makeActive('4')">приключения</a></li>
                                        <!-- <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">семейный</a></li>
                                        <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">спорт</a></li> -->
                                        <li class="nav-item"><a href="ganrrrТриллеры" class="4" v-on:click="makeActive('4')">триллер</a></li>
                                       <!--  <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">ужасы</a></li>
                                        <li class="nav-item"><a href="ganrrr" class="4" v-on:click="makeActive('4')">фантастика</a></li> -->
                                    </ul>
                                </div>
                                
                            </div>
                            
                            <div class="container" id="menubar3" >
                                <div class="row">
                                   <div class="col-xs-2" >

                                    <ul class="nav flex-column" >
                                        <li class="nav-item"><a href="menusend2018" class="2018" v-on:click="makeActive2('2018')">2018</a></li>
                                        <li class="nav-item"><a href="menusend2017" class="2017" v-on:click="makeActive2('2017')">2017</a></li>
                                        <li class="nav-item"><a href="menusend2020" class="2016" v-on:click="makeActive2('2020')">2020</a></li>
                                        <li class="nav-item"><a href="menusend2019" class="2015" v-on:click="makeActive2('2019')">2019</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-2">
                                    <ul class="nav flex-column" id="menubar4">
                                        <li class="nav-item"><a href="teamСША" class="2018" v-on:click="makeActive2('2018')">США</a></li>
                                        <li class="nav-item"><a href="teamТурция" class="2017" v-on:click="makeActive2('2017')">Турция</a></li>
                                        <li class="nav-item"><a href="teamВеликобритания" class="2016" v-on:click="makeActive2('2016')">Великобритания</a></li>
                                        <li class="nav-item"><a href="teamПольша" class="2015" v-on:click="makeActive2('2015')">Польша</a></li>
                                    </ul>
                                    
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-4">
                            
                                <div id="formcolor">
                        <!-- csrf -->
                                <div class="form-group">
    <label for="exampleFormControlSelect1">Год  </label>
    <select class="form-control" v-model="exampleFormControlSelect1" name="form1">
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
    </select>
</div>
  <div class="form-group">
    <label for="exampleFormControlSelect2"> Страна </label>
    <select class="form-control" v-model="exampleFormControlSelect2" name="form2">
      <option>Турция</option>
      <option>Польша</option>
      <option>США</option>
      <option>Великобритания</option>
      <option>Канада</option>
    </select>
</div>
  <div class="form-group">
    <label for="exampleFormControlSelect3"> Жанр</label>
    <select class="form-control" v-model.lazy="exampleFormControlSelect3" name="form3">
      <option>Биография</option>
      <option>Драмы</option>
      <option>Криминальные</option>
      <option>Комедии</option>
      <option>Триллеры,</option>
    </select>
</div>


<div class="form-group" id="example1" >
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio1" value="option1" name="form4" >
  <label class="form-check-label" for="inlineRadio1">По дате</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio2" value="option2" name="form4">
  <label class="form-check-label" for="inlineRadio2">По рейтингу
</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio3" value="option3" name="form4">
  <label class="form-check-label" for="inlineRadio3">По рейтингу КП
</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio3" value="option4" name="form4">
  <label class="form-check-label" for="inlineRadio3">По рейтингу imbd
</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio3" value="option5" name="form4">
  <label class="form-check-label" for="inlineRadio3">По просмотрам
</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" v-model="inlineRadioOptions" id="inlineRadio3" value="option6" name="form4">
  <label class="form-check-label" for="inlineRadio3">По году

</label>
</div>

</div>

@{{inlineRadioOptions}}
@{{exampleFormControlSelect1}}
@{{exampleFormControlSelect2}}

@{{exampleFormControlSelect3}}
@{{formfilter}}
<button  v-on:click="fetch2" >поиск</button>
<button>очистить</button>

</div>
<div>
    
</div>

  </div>

                            </div>
                        </div></div>

                        
