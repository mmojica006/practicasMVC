<html>
<noscript><br/>For optimal experience, enable JavaScript in your browser.<br/><br/></noscript>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Note: Ensure that the moment.js is available and correctly referenced in the client environment.-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data-2012-2022.min.js"></script>
<script language="JavaScript">
    function updateAuthor(theForm){
    if(theForm.extensionField_Name){
    if(theForm.extensionField_Name.value!=""){
    theForm.author.value=theForm.extensionField_Name.value;
    theForm.extensionField_Name.name="extensionField_h_Name";
    return(true);}}
    if(theForm.extensionField_Email){
    if(theForm.extensionField_Email.value!=""){
    theForm.author.value=theForm.extensionField_Email.value;
    return(true);}}
    return(true);}

/************ Begin of Java Script code to handle Chat Schedule Config ************************/
/*
Below code handles the display of Chat form based on the Chat Schedule configuration. The chat form is displayed to the client if the client’s browser current time is in the Business working hours else offline message is display.The Chat Schedule configuration handles client’s in different time zones as well as daylight saving provided the client’s system time settings are appropriate.
The Chat Schedeule code flow requires moment timezone library, if the library is not accessible then scheduling configuration is ignore and Chat form is always displayed to the client.
*/

// convert client’s timezone to server time zone using moment timezone library to validate against Chat Schedule configuration.
    var serverTimezone = "America/Managua" ;
    var currentDateInServerTimeZone = moment.tz(new Date(), serverTimezone);
    var currDay = currentDateInServerTimeZone.day();
    var currDate = currentDateInServerTimeZone.format("YYYY-MM-DD");
    var currWorkTimeMins = (currentDateInServerTimeZone.hours() * 60) + currentDateInServerTimeZone.minutes();
//Below variables hold the Chat Schedule Configuration details as provided in the AppAdmin Schedule Configuration Page
    var holidays = [];
    var specialDays = [];
    var routineDays = [{"day" :"1", "workTime" : {"startTime" : 480, "endTime" : 1020 }},{"day" :"2", "workTime" : {"startTime" : 480, "endTime" : 1020 }},{"day" :"3", "workTime" : {"startTime" : 480, "endTime" : 1020 }},{"day" :"4", "workTime" : {"startTime" : 480, "endTime" : 1020 }},{"day" :"5", "workTime" : {"startTime" : 480, "endTime" : 1020 }},{"day" :"6", "workTime" : {"startTime" : 480, "endTime" : 720 }}];
    function isOnHoliday() {
    for (var i=0; i < holidays.length; i++) {
    if(holidays[i] == currDate){
    return true;
    }
    }
    return false;
}
    function isOnSpecialDay() {
    for (var i=0; i < specialDays.length; i++) {
    if(specialDays[i].date == currDate){
    break;
    }
    }
    return specialDays[i];
    }
    function isInWorkingHour(workTime) {
    return currWorkTimeMins <= workTime.endTime && currWorkTimeMins >= workTime.startTime;
    }
    function isOperatingHour() {
    var isOperatingHour= false;
    if (!isOnHoliday()) {
    var specialDate = isOnSpecialDay();
    if (specialDate) {
    isOperatingHour = isInWorkingHour(specialDate.workTime);}
    else {
    for (var i=0; i < routineDays.length; i++) {
    if (routineDays[i].day == currDay) {
    isOperatingHour = isInWorkingHour(routineDays[i].workTime);
    break;}}
    if (routineDays.length == 0){isOperatingHour = true; }}
    }
    return isOperatingHour
    }
    function onLoadInit() {
    var displayChatForm= true;
    // Ignore Chat Schedule if moment timezone library is not available
    if (window.moment) {
    displayChatForm = isOperatingHour();
    }
    if(displayChatForm) {
    document.getElementById("chatForm").style.display = "inline";
    }
    else {
    document.getElementById("closedMessage").style.display = "inline";
    }
    }
</script>
</head>
<body onload="onLoadInit()">
<div id="chatForm" style="display:none">
<form action="https://cdesocialminer.crediexpress.com.ni/ccp/chat/form/100000" method="post" onsubmit="return updateAuthor(this)">
<style type="text/css">span { display: inline-block; width: 120px; }</style>
    <span>Name:</span><input type="text" name="extensionField_Name" /><br/>
    <span>Telefono:</span><input type="text" name="extensionField_Telefono" /><br/>
    <span>Problem:</span>
    <select name="extensionField_ccxqueuetag"><br/>
        <option value="Chat_Csq5">Solicitud de Credito</option>
        <option value="Chat_Csq5">Informacion de Credito vigente</option>
        <option value="Chat_Csq5">Canje de Puntos</option>
        <option value="Chat_Csq5">Reclamo, Consultas o Sugerencias</option>
        <option value="Chat_Csq5">Remesas</option>
    </select><br/>
<input type="submit" value="Submit"/><input type="hidden" name="author" value="Customer"/><br/>
<input type="hidden" name="title" value="ccx chat"/><br/>
<input type="hidden" name="extensionField_h_widgetName" value="CDEWebChat"/><br/>
<!-- The following optional, hidden fields are available in order to customize the Customer Chat user interface.
Unlike other extension fields, these are not added to the social contact, and therefore do not display in the Agent Chat user interface.-->
<input type="hidden" name="extensionField_contextServiceCustomFieldSets" value="">
<input type="hidden" name="extensionField_chatLogo" value=""><br/>
<input type="hidden" name="extensionField_chatWaiting" value="Bienvenido.Por favor espere mientras le contactamos con un Agente de Atención al Cliente">
<input type="hidden" name="extensionField_chatAgentJoinTimeOut" value="Por el momento todos nuestros Agentes se encuentran ocupados. Por favor espere o intente más tarde.">
<input type="hidden" name="extensionField_chatError" value="El Servicio de Chat se encuentra fuera de Servicio. Lamentamos los inconvenientes. Por favor intente más tarde.">
</form>
</div>
<div id="closedMessage" style="display:none">
<h2> En estos momentos nuestro Servicio de Chat no esta disponible. Por favor intente mas tarde. </h2>
</div>
</body>
</html>
