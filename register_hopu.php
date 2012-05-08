<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//  'cache' => 'tmp/chache',
));
$template = $twig->loadTemplate('hopu_template_2012.php');
$params = array(
  'googleform' => array(
    'active' => false
  ),
  'pagetitle' => 'Individual Registration',
  'description' => "Instructions for player registration for Hopu Ka Lewa.",
  'keywords' => 'Hawaii, ultimate, frisbee, ultimate frisbee, coed, tournament, registration, player',
  'content' => '    <hgroup class="grid_12">
                    <h1>
                        Hopu Ka Lewa 14 Individual Registration
                    </h1>
                    <p>
                        Player fee includes all breakfasts and dinners, drinks, entertainment, camping, player&#039s pack (disc and Hopu surprise), plus all field supplies (water, fruit, EMT, etc.).  All players should register through the online registration system, which will be available once team bids are accepted.
                    </p>
                </hgroup>
                <section class="grid_8" id="individualregistration">
                    <h2>
                        Player Registration Rates
                    </h2>
                        <h3>
                            Early-bird (Aug. 31 to Sep. 30, 2012): $120
                        </h3>
                        <p>
                            You must have registered and paid before Sep. 30 in order to avoid increased fees.  That means that your check must be postmarked before Sep. 30.
                        </p>
                        <h3>
                            Late Registration (Oct. 1 - Oct. 28, 2012): $140
                        </h3>
                        <p>
                            Again, you must have registered and paid before Sep. 30 in order to avoid the Late fee.
                        </p>
                        <p>
                            Only players registering before Oct. 1 are guaranteed a complete player&#039s pack.
                        </p>
                        <h3>
                            Shame-on-you Registration (Oct. 29 - Nov. 9, 2012): $159
                        </h3>
                        <p>
                            Hana hou: You must have registered and paid before Oct. 28 in order to avoid the Shame-on-you fee.  Also, only players registering before Oct. 1 are guaranteed a complete player&#039s pack.  After Oct. 28, <strong>Do Not Mail A Check.</strong>  Checks had to have been postmarked before Oct. 28 to be accepted.  Payment online is accepted until Nov. 2.  Checks or cash (no credit cards) are accepted as payment at the fields.
                        </p>
                    <h2>
                        Guest Registration Rates
                    </h2>
                        <h3>
                            Full Weekend Guest: $70
                        </h3>
                        <p>
                            Included for this rate are all breakfasts and dinners, drinks, camping permit, player&#039s pack, and entertainment.
                        </p>
                        <p>
                            Weekend guests may register online or by sending a check.
                        </p>
                        <h3>
                            Daily Guest: $20
                        </h3>
                        <p>
                            Included for this rate are dinner, drinks, and entertainment.
                        </p>
                        <p>
                            Daily guests may register online (but are not obligated to do so), however they must check-in and pay at the fields.
                        </p>
                        <p>
                            Daily guests must be escorted through the field entrance by a paid player or be registered on the guest list.  To get on the guest list, a paid player must notify the Tournament Director of the guest&#039s name by Nov. 6.
                        </p>
                </section>
                <section class="grid_4" id="individualdates">
                    <h2>
                        Important Individual Registration Dates
                    </h2>
                    <p>
                        Please note these dates on your calendar so you know how to register and how much to pay.
                    </p>
                    <dl>
                        <dt>Sep. 28, 2012</dt><dd>Last day to request a full player&#039s refund (minus $15 processing fee).</dd>
                        <dt>Sep. 30, 2012</dt><dd>Last day to register for Early-bird rate: $120 (payment must be made online or postmarked by this date).</dd>
                        <dt>Oct. 28, 2012</dt><dd>Last day to register for the Late rate: $142 (payment must be made online or postmarked by this date).</dd>
                        <dt>Nov. 2, 2012</dt><dd>Last day to request a partial player&#039s refund.<br/>Also, last day to register and pay online for the Shame-on-you rate: $159 (mailed checks will not be accepted after Oct. 28, 2012).</dd>
                        <dt>Nov. 3-9, 2012</dt><dd>Shame-on-you rate applies: $159 (do not mail anything nor register nor pay online; register and pay at the fields on Nov. 9, 2012).</dd>
                    </dl>
                </section>
                <section id="paymentoptions" class="grid_4">
                    <h2>
                        Methods of Payment
                    </h2>
                    <details>
                        <summary>Credit Card</summary>
                        <p>We use PayPal to process online credit card transactions.  Instructions will be presented to you after you submit your online individual registration.</p>
                    </details>
                    <details>
                        <summary>Personal Check</summary>
                        <p>If you choose not to pay online, please pay by sending a check payable to "Hopu Ka Lewa" to:</p>
                        <blockquote>
                            Kayleigh Hudson<br />
                            1321 Wood Ave Apt 7<br />
                            Colorado Springs, CO 80903
                        </blockquote>
                        <p>Along with your check, include a short note with your team name and the name you registered under.  If paying by check, you will still need to fill out the registration form online.  Simply indicate in your registreation that you will pay by check.</p>
                        <p>Note that checks postmarked after <strong>Oct. 28</strong> will not be accepted.  Please either pay online or at the fields.</p>
                    </details>
                </section>
                <section id="individualrefunds" class="grid_5">
                    <h2>
                        Individual Player Refunds
                    </h2>
                    <p>Did something come up?  We&#039re sorry we won&#039t be seeing you this year.  Please keep the following dates in mind when asking for a refund.</p>
                    <dl>
                        <dt>Sep. 28, 2012</dt><dd>Last day for full player&#039s fee refund (minus a processing fee of $15). To qualify for a full refund, you must notify the Tournament Director, via mail or <a href="mailto:hopu@hawaiiultimate.com">email</a>, by Sep. 28.</dd>
                        <dt>Sep. 28 - Nov. 2, 2012</dt><dd>Partial player&#039s fee refund period.  Players withdrawing from the tournament can receive a partial refund corresponding to
                                                        <blockquote>Partial Refund = Paid Registration - $70.</blockquote>
                                                        </dd>
                    </dl>
                </section>
                <section id="pickups" class="grid_7">
                    <h2>
                        Pickup Players
                    </h2>
                    <p>No team?  No problem!</p>
                    <h3>
                        Aloha Spirit (pickup team)
                    </h3>
                        <p>
                            We&#039ve got an Aloha Spirit team: A fun and spirited pickup team where you&#039ll meet cool people from all over.  To register, sign up on the online registration or drop us an <a href="mailto:hopu@hawaiiultimate.com">email</a> to tell us you would like to play for the Aloha Spirit Team.
                        </p>
                        <p>
                            The Aloha Spirit team is limited to 12 male and 8 female players.  It will be filled on a <emph>first-come, first-served</emph> basis.
                        </p>
                    <h3>
                        Orphan Player List
                    </h3>
                        <p>
                            Are you interested in playing with an established team?  Often teams will attend even if they have small rosters and be looking to pick up orphan players.  To be considered, please send the Tournament Director an <a href="mailto:hopu@hawaiiultimate.com">email</a> that includes the following:
                            <ul>
                                <li>Name: </li>
                                <li>Email: </li>
                                <li>Where are you from: </li>
                                <li>Height: </li>
                                <li>Male or Female? </li>
                                <li>Short Biography (Playing experience, preferred positions, what you bring to a team, etc.): </li>
                                <li>Personal best boat race time trial: </li>
                            </ul>
                        </p>
                        <p>
                            Perspective teams will contact you directly.  Pleaes notify the Tournament Director once you&#039ve picked up with a team.
                        </p>
                        <p>
                            Note that players are not permitted to sign up for both the Aloha Spirit team and the Orphan Player list at the same time.  Please choose one.
                        </p>
                </section>'
);
$template->display($params);
?>