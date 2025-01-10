<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mayaform.css">
    <title>Account Information</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="/mayashope">
                    <img src="/img/arrow.png" alt="arrow">
                </a>
                <h2>Chalice Form</h2>
            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="footer_container">
            <form id="questionnaireForm" action="/mayaform" method="POST" enctype="multipart/form-data">
                @csrf 

                <!-- Page 1 -->
                <div id="page1">
                    <label for="Sponsor">Sponsor Site:</label>
                    <input type="text" id="Sponsor" name="Sponsor" required>
                    <br>
                    <label for="nameofchild">Name Of Child:</label>
                    <input type="text" id="nameofchild" name="nameofchild" required>
                    <br>
                    <label for="dateofbirth">Date Of Birth:</label>
                    <input type="date" id="dateofbirth" name="dateofbirth" required>
                    <br>
                    <label for="school">Name Of Child's School:</label>
                    <input type="text" id="school" name="school" required>
                    <br>
                    <label for="address">Address Or Location:</label>
                    <input type="text" id="address" name="address" required>
                    <br>
                    <label for="sub_site">Sub-Site:</label>
                    <input type="text" id="sub_site" name="sub_site" required>
                    <br>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    <br>
                    <label for="reilogion">Religion:</label>
                    <input type="text" id="reilogion" name="reilogion" required>
                    <br>
                    <label for="Grade">Grade:</label>
                    <select id="Grade" name="Grade">
                        <option value="Elementary">Elementary</option>
                        <option value="Highschool">Highschool</option>
                        <option value="College">College</option>
                    </select>
                    <br>
                    <label for="fathername">Name Of Father:</label>
                    <input type="text" id="fathername" name="fathername" required>
                    <br>
                    <label for="father_occupation">Father Occupation:</label>
                    <input type="text" id="father_occupation" name="father_occupation" required>
                    <br>
                    <label for="father_income">Father's Monthly Income:</label>
                    <input type="number" id="father_income" name="father_income" required>
                    <br>
                    <label for="father_employment">Employment of Father:</label>
                    <select id="father_employment" name="father_employment">
                        <option value="Full time">Full time</option>
                        <option value="Part time">Part time</option>
                        <option value="Occasional">Occasional</option>
                    </select>
                    <br>
                    <label for="mothername">Name Of Mother:</label>
                    <input type="text" id="mothername" name="mothername" required>
                    <br>
                    <label for="mother_occupation">Mother Occupation:</label>
                    <input type="text" id="mother_occupation" name="mother_occupation" required>
                    <br>
                    <label for="mother_income">Mother's Monthly Income:</label>
                    <input type="number" id="mother_income" name="mother_income" required>
                    <br>
                    <label for="mother_employment">Employment of Mother:</label>
                    <select id="mother_employment" name="mother_employment">
                        <option value="Full time">Full time</option>
                        <option value="Part time">Part time</option>
                        <option value="Occasional">Occasional</option>
                    </select>
                    <br>
                    <div class="footer_9">
                        <button type="button" id="nextPage">Next</button>
                    </div>
                </div>

                <!-- Page 2 -->
                <div id="page2" class="hidden">
                    <!-- Questions 1-24 -->
                    <label for="question1">1. Child to be sponsored:</label>
                    <select id="question1" name="question1">
                        <option value="3">Total orphan</option>
                        <option value="2">Has single parent</option>
                        <option value="1">Lives with relative, has 2 parents</option>
                    </select>
                    <br>
                    <label for="question2">2. Level of family income:</label>
                    <select id="question2" name="question2">
                        <option value="3">Below poverty</option>
                        <option value="2">Barely above poverty</option>
                        <option value="1">Regular income</option>
                    </select>
                    <br>
          
                    





                    <label for="question3">3.Other children of the family sponsored:</label>
                            <select id="question3" name="question3">
                            <option value="3" >None</option>
                            <option value="2" >One child</option>
                            <option value="1" >Two+ children</option>
                            </select>
                            <br>
                        <label for="question4">4.Number of chidren in the home:</label>
                            <select id="question4" name="question4">
                            <option value="3" >More than 5</option>
                            <option value="2" >2-5 children</option>
                            <option value="1" >Only child</option>
                            </select>
                            <br>
                        <label for="question5">5.house:</label>
                            <select id="question5" name="question5">
                            <option value="3" >No permanent House</option>
                            <option value="2" >Rented House</option>
                            <option value="1" >Own House</option>
                            </select>
                            <br>
                        <label for="question6">6.Condition of House:</label>
                            <select id="question6" name="question6">
                            <option value="3" >Very poor and small</option>
                            <option value="2" >Single room</option>
                            <option value="1" >Adequate</option>
                            </select>
                            <br>
                        <label for="question7">7.Construction of roof:</label>
                            <select id="question7" name="question7">
                            <option value="3" >Plastic/Cardboard</option>
                            <option value="2" >Thatched/Metal</option>
                            <option value="1" >Concrete/Solid</option>
                            </select>
                            <br>
                        <label for="question8">8.Toilet facility:</label>
                            <select id="question8" name="question8">
                            <option value="3" >None/None-Sanitary</option>
                            <option value="2" >Public toilet/Semi-Sanitary</option>
                            <option value="1" >Own toilet/Sanitary</option>
                            </select>
                            <br>
                        <label for="question9">9.Electricity:</label>
                            <select id="question9" name="question9">
                            <option value="3" >Not in the house</option>
                            <option value="2" >One light or outlet</option>
                            <option value="1" >Yes</option>
                            </select>
                            <br>
                        <label for="question10">10.Access to drink water:</label>
                            <select id="question10" name="question10">
                            <option value="3" >Stream or pond</option>
                            <option value="2" >Public or bore well</option>
                            <option value="1" >Municipal water/private pump</option>
                            </select>
                            <br>
                        <label for="question11">11.Sickness of parents:</label>
                            <select id="question11" name="question11">
                            <option value="3" >Chronic illness</option>
                            <option value="2" >Some illness</option>
                            <option value="1" >No illness</option>
                            </select>
                            <br>
                        <label for="question12">12.Sickness of child to be sponsored:</label>
                            <select id="question12" name="question12">
                            <option value="3" >Chronic illness or disability</option>
                            <option value="2" >Some illness</option>
                            <option value="1" >No illness</option>
                            </select>
                            <br>
                        <label for="question13">13.Sickness of other children in the family:</label>
                            <select id="question13" name="question13">
                            <option value="3" >Chronic</option>
                            <option value="2" >Some illness</option>
                            <option value="1" >No illness</option>
                            </select>
                            <br>
                        <label for="question14">14.meals:</label>
                            <select id="question14" name="question14">
                            <option value="3" >No regular meals or one meal a day</option>
                            <option value="2" >Two meals a day</option>
                            <option value="1" >Regular meals</option>
                            </select>
                            <br>
                        <label for="question15">15.Clothing:</label>
                            <select id="question15" name="question15">
                            <option value="3" >very inadequate</option>
                            <option value="2" >Poor</option>
                            <option value="1" >Adequate</option>
                            </select>
                            <br>
                        <label for="question16">16.Access to medical care:</label>
                            <select id="question16" name="question16">
                            <option value="3" >Unavailable in villageor town</option>
                            <option value="2" >Difficult to access</option>
                            <option value="1" >Yes</option>
                            </select>
                            <br>
                        <label for="question17">17.Child has physical/mental disabilities:</label>
                            <select id="question17" name="question17">
                            <option value="3" >Yes severe</option>
                            <option value="2" >Some impairment</option>
                            <option value="1" >Normal</option>
                            </select>
                            <br>
                        <label for="question18">18.Child is victim of abuse(violence,alcohol ect):</label>
                            <select id="question18" name="question18">
                            <option value="3" >Very Apparent</option>
                            <option value="2" >Some ivedence</option>
                            <option value="1" >No evidence</option>
                            </select>
                            <br>
                        <label for="question19">19.School attendance:</label>
                            <select id="question19" name="question19">
                            <option value="3" >Too poor</option>
                            <option value="2" >Some ivedence</option>
                            <option value="1" >No evidence</option>
                            </select>
                            <br>
                        <label for="question20">20.Child involved in child labour:</label>
                            <select id="question20" name="question20">
                            <option value="3" >Yes</option>
                            <option value="2" >Sometimes</option>
                            <option value="1" >No</option>
                            </select>
                            <br>
                        <label for="question21">21.Education level of parents:</label>
                            <select id="question21" name="question21">
                            <option value="3" >Both illiterate</option>
                            <option value="2" >Some schooling or elementary only</option>
                            <option value="1" >Some trade skills or Some secondary</option>
                            </select>
                            <br>
                        <label for="question22">22.Is the family receiving others assistance:</label>
                            <select id="question22" name="question22">
                            <option value="3" >No</option>
                            <option value="2" >Sometimes</option>
                            <option value="1" >Yes</option>
                            </select>
                            <br>
                        <label for="question23">23.Property owned by the family:</label>
                            <select id="question23" name="question23">
                            <option value="3" >None</option>
                            <option value="2" >Own house</option>
                            <option value="1" >House and some land</option>
                            </select>
                            <br>
                        <label for="question24">24.SIze of Cultivable land:</label>
                            <select id="question24" name="question24">
                            <option value="3" >None</option>
                            <option value="2" >Small</option>
                            <option value="1" >Average</option>
                            </select>
                            <br>









                    <div class="footer_9">
                        <button type="button" id="previousPage">Back</button>
                        <button type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </footer>

    <script>
        // JavaScript for handling page navigation
        const page1 = document.getElementById('page1');
        const page2 = document.getElementById('page2');
        const nextPageButton = document.getElementById('nextPage');
        const previousPageButton = document.getElementById('previousPage');

        nextPageButton.addEventListener('click', () => {
            page1.classList.add('hidden');
            page2.classList.remove('hidden');
        });

        previousPageButton.addEventListener('click', () => {
            page2.classList.add('hidden');
            page1.classList.remove('hidden');
        });
    </script>
</body>
</html>







