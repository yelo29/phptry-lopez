@echo off
echo Monitoring Apache Error Log...
echo Press Ctrl+C to stop
echo.

:loop
cls
echo === Apache Error Log - Last 10 Lines ===
echo.
powershell -Command "Get-Content 'C:\xampp\apache\logs\error.log' -Tail 10"
echo.
echo Refreshing in 3 seconds...
timeout /t 3 /nobreak >nul
goto loop
