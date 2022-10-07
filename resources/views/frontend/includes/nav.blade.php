    <!---Menu Bar-->

    <div class="container-fluid">
        <div class="row top-two">
            <div class="col-md-8 col-8" style="padding:0">
                <ul class="menu">
                    <li>
                        <a id="menu_user_d_home" href="member/UserHome.html" class="">home</a>
                    </li>

                    <li>
                        <a id="menu_user_d_inplay" href="member/Matches/Inplay.html">In-Play</a>
                    </li>

                    <li>
                        <a id="menu_user_d_mm" href="member/Matches/MultiMarkets.html">multi markets</a>
                    </li>

                    <li>
                        <a id="menu_user_d_cr_inplay" href="member/Matches/Inplaymatch/4.html">cricket</a>
                    </li>

                    <li>
                        <a id="menu_user_d_sc_inplay" href="member/Matches/Inplaymatch/1.html">soccer</a>
                    </li>

                    <li>
                        <a id="menu_user_d_tn_inplay" href="member/Matches/Inplaymatch/2.html">tennis</a>
                    </li>

                    <li>
                        <a id="menu_user_d_ipl" href="member/Winner/Ipl.html">IPL winner</a>
                    </li>
                        
                    <li>
                        <a style="color:#000" id="menu_user_d_casino" onclick="showLoginPopupForCasino()">casino</a>
                    </li>

                    <li>
                        <a id="menu_user_d_result" href="member/Match/Result.html">result</a>
                    </li>

                    <li>
                        <a id="menu_user_d_binary" href="member/Binary.html">Binary</a>
                    </li>

                    <li>
                        <a id="menu_user_d_mt5" href="#">MT5</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-4 right">
                <ul>
                    <li class="time_zone" id="timeZoneView"><span>Time Zone :</span> GMT+6:0</li>
                    <li>
                        <a id="one_click_bet" class="bet one_click ">
                            <img src="{{ asset('frontend_assets/img/transparent.gif')}}">
                            one click bet
                        </a>
                    </li>
                    <li>
                        <a href="#" id="setting-drop" onclick="checkLogin()" class="dropdown-toggle">setting
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </a>
                        <!-- setting toggle start  -->
                        <div id="set_pop" class="dropdown-menu slip_set-pop"
                            style="margin: 6px; padding-top: 0; padding-bottom: 0;">
                            <div id="coinList" class="set-content">
                                <dl class="odds-set">
                                    <dd class="col-defult">
                                        <label for="defult_stake"><strong>Default stake</strong></label>
                                        <input id="userCoin" class="stake-input" type="text" maxlength="7" value="">
                                    </dd>
                                </dl>
                                <dl id="stakeSet" class="stake-set">
                                    <dt>Stake</dt>
                                    <dd>
                                        <a id="coin_1" onclick="addStakes('1')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_2" onclick="addStakes('2')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_3" onclick="addStakes('3')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_4" onclick="addStakes('4')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_5" onclick="addStakes('5')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_6" onclick="addStakes('6')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_7" onclick="addStakes('7')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd>
                                        <a id="coin_8" onclick="addStakes('8')" style="cursor:pointer;" class="btn"></a>
                                    </dd>
                                    <dd class="col-edit">
                                        <a id="editStakeButton" class="btn-edit">
                                            Edit
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </dd>
                                </dl>
                                <dl id="editCustomizeStakeList" class="stake-set" style="display: none;">
                                    <dt>Stake</dt>
                                    <dd>
                                        <input id="stakeEdit_1" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_2" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_3" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_4" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_5" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_6" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_7" class="stake_edit-input" type="text" value=""maxlength="7">
                                    </dd>
                                    <dd>
                                        <input id="stakeEdit_8" class="stake_edit-input" type="text" value="" maxlength="7">
                                    </dd>
                                    <dd class="col-edit">
                                        <a id="setStakeButton" onclick="setStakes()"  class="btn-send">OK</a>
                                    </dd>
                                </dl>
                                <dl class="odds-set">
                                    <dt>Odds</dt>
                                    <dd>
                                        <input id="enableSparkCheck" checked="" type="checkbox">
                                        <label for="enableSparkCheck">Highlight when odds change</label>
                                    </dd>
                                </dl>
                                <dl class="odds-set">
                                    <dt>FancyBet</dt>
                                    <dd>
                                        <input id="fancyBetAcceptAnyOddsCheckBox" type="checkbox"><label for="fancy_odd">Accept Any Odds</label>
                                    </dd>
                                </dl>
                                <dl class="odds-set">
                                    <dt>SportsBook</dt>
                                    <dd>
                                        <input id="sportsBookAcceptAnyOddsCheckBox" type="checkbox"><label>Accept Any Odds</label>
                                    </dd>
                                </dl>
                                <dl class="odds-set">
                                    <dt>Binary</dt>
                                    <dd>
                                        <input id="financialAcceptAnyOddsCheckBox" type="checkbox"><label>Accept Any Price</label>
                                    </dd>
                                </dl>

                                <ul class="btn-wrap">
                                    <li>
                                        <a id="closeSet" class="cancel cancel" style="cursor:pointer;">Cancel</a>
                                    </li>
                                    <li class="col-send">
                                        <a id="coinSave" class="btn-send save" onclick="setStakes()" style="cursor:pointer;">Save</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- setting toggle end  -->
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Menu Bar End-->