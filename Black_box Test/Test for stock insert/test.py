from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://127.0.0.1/sms/stock-info.php")
print(driver.title)
btn = driver.find_element_by_id('insert')
# print(btn.text)
btn.click()
textField1 =driver.find_element_by_name('pname')
textField1.send_keys('Grape')
textField2 =driver.find_element_by_name('quantity')
textField2.send_keys('10')

insrtBtn = driver.find_element_by_xpath('/html/body/form/input[3]')
insrtBtn.click()