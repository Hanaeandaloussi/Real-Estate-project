import React, { useState, useEffect } from 'react';
function MyComponent() {
          const [menuActive, setMenuActive] = useState(false);

          useEffect(() => {
                    window.addEventListener('scroll', () => {
                              setMenuActive(false);
                    });
                    return () => {
                              window.removeEventListener('scroll', () => {
                                        setMenuActive(false);
                              });
                    };
          }, []);

          const toggleMenu = () => {
                    setMenuActive(!menuActive);
          };

          const handleInputNumber = (event) => {
                    const inputNumber = event.target;
                    if (inputNumber.value.length > inputNumber.maxLength) {
                              inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
                    }
          };

          const toggleBox = (event) => {
                    const box = event.target.parentElement;
                    box.classList.toggle('active');
          };

          return (
                    <div>
                              <button id="menu-btn" onClick={toggleMenu}>Toggle Menu</button>
                              <div className={`header ${menuActive ? 'active' : ''}`}>
                                        <div className="menu">Menu Content</div>
                              </div>
                              <input type="number" maxLength="5" onInput={handleInputNumber} />
                              <input type="number" maxLength="5" onInput={handleInputNumber} />
                              <div className="faq">
                                        <div className="box-container">
                                                  <div className="box">
                                                            <h3 onClick={toggleBox}>FAQ 1</h3>
                                                            <div>FAQ 1 Content</div>
                                                  </div>
                                                  <div className="box">
                                                            <h3 onClick={toggleBox}>FAQ 2</h3>
                                                            <div>FAQ 2 Content</div>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          );
}

export default MyComponent;
