 function loadComponent(url, targetId) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(targetId).innerHTML = data;

                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = data;

                    const scripts = tempDiv.querySelectorAll('script');
                    scripts.forEach(script => {
                        const newScript = document.createElement('script');
                        if (script.src) {
                            newScript.src = script.src;
                        } else {
                            newScript.textContent = script.textContent;
                        }
                        document.body.appendChild(newScript);
                    });
                })
                .catch(error => console.error('Fout bij laden:', error));
        }

        // Roep de functie aan om navbar.html in te laden
        loadComponent('componenten/navbar.html', 'navbar');