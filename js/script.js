function getUserServiceChoice(){
    var ReasonForContact = prompt("Write your reason: Project / Thesis / personal interest");
    if (ReasonForContact) {
        var serviceChoice = ReasonForContact.toLowerCase();
        if (serviceChoice === "project") {  
            alert('Contacting for a project');

        }
        else if (serviceChoice === "thesis") {
            alert('Contacting for a thesis');
        }
        else if (serviceChoice === "personal interest") {
            alert('Contacting for personal interest');
        }
        else {
            alert('Invalid reason for contact');
        }
    }
    else if(!ReasonForContact) {
        alert('You did not provide a reason for contact');
    }
    var serviceChoice = prompt("Please select a valid service: Web Design/ SEO / Others");
    if (serviceChoice) {
        var lowerCaseChoice = serviceChoice.toLowerCase();
        if (lowerCaseChoice === "web design") {
            alert('Web Design service wanted');
        }
        else if (lowerCaseChoice === "seo") {
            alert('SEO service wanted');
        }
        else if (lowerCaseChoice === "others") {
            alert('Others service wanted');
        }
        else {
            alert('Invalid service choice');
        }
    }
    else if(!serviceChoice) {
        alert('You did not provide which service you want');

    }

    var positionOfJobProvider = prompt("Please select your position if you are offering job: HR / Manager / CEO / Others");
    if (positionOfJobProvider) {
        var lowerJobProvider = positionOfJobProvider.toLowerCase();
        if (lowerJobProvider === "hr") {
            alert('HR wants to contact with you');
        }
        else if (lowerJobProvider === "manager") {
            alert('Manager wants to contact with you');
        }
        else if (lowerJobProvider === "ceo") {
            alert('CEO wants to contact with you');
        }
        else if (lowerJobProvider === "others") {
            alert('Unkonown person wants to contact with you');
        }
        else {
            alert('Invalid position for job provider');
        }
    }
    else if(!positionOfJobProvider) {
        alert('You did not provided your position');
    }

    console.log("User input received:\n");
    console.log("Reason for contact: " + ReasonForContact);
    console.log("Service choice: " + serviceChoice);
    console.log("Position of job provider: " + positionOfJobProvider);
    alert("Thank you for your input!");
    return {
        reason: ReasonForContact,
        service: serviceChoice,
        position: positionOfJobProvider
    };


}

getUserServiceChoice();