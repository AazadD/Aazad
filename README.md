# Hi, I'm Aazad Nath Tharu 👋
**Infrastructure & Systems Engineer | CICD & Automation**

Infrastructure & Systems Engineer with 6+ years of hands-on experience in enterprise Linux and Windows administration, network engineering, and automation workflows. Experienced in managing updates across 100+ production servers via Ansible, maintaining Asterisk-based telephony systems, and deploying CI/CD pipelines.

---

### 🛠️ Core Skills & Tech Stack

* **DevOps & CI/CD:** GitHub Actions (Self-Hosted Runner), GitLab CI, Ansible Playbooks, Docker, Bash Scripting
* **System Administration:** Linux (CentOS, RHEL, Ubuntu, Debian), Windows Server (AD, DNS, DHCP, LDAP)
* **Networking & Security:** Cisco, Fortigate, Palo Alto, VLANs, Site-to-Site VPNs, Routing & Switching (OSPF, TCP/IP)
* **Web Proxies & Traffic Routing:** Nginx, Apache (Reverse Proxy, Virtual Hosts, SSL/TLS Termination)
* **Virtualization & HA:** VMware ESXi, Hyper-V (Replication & DR), XenServer[cite: 1]
* **VoIP Telephony:** Asterisk Core, Telephony Infrastructure, Real-Time Agent Monitoring Systems[cite: 1]
* **Monitoring:** Prometheus, Grafana, Nagios, Zabbix[cite: 1]

---

### 🚀 This Repository: Infrastructure & CI/CD Deployment Lab

This repository contains functional configurations and automation code demonstrating:
1. **Self-Hosted CI/CD:** Workflows triggered via GitHub Actions running on a local private Linux runner (`.github/workflows/deploy.yml`).
2. **Fleet Updates with Ansible:** Modular playbooks and inventory setups for web service deployment and zero-downtime reloads (`ansible/`).
3. **Dual Pipeline Definition:** Complementary GitLab CI pipeline configuration (`gitlab-ci/`).
4. **Proxy Traffic Forwarding:** Production-ready Nginx reverse proxy routing traffic to backend services with health checks (`nginx/app-reverse-proxy.conf`).

#### Quick Execution
```bash
# 1. Run the deployment playbook locally
ansible-playbook -i ansible/hosts.ini ansible/update.yml

# 2. Test the health check endpoint
curl -I [http://127.0.0.1/health](http://127.0.0.1/health)


Career Production Experience (Voxcrow & Loop Networks)
Fleet Update Automation: Authored and maintained custom Ansible playbooks to standardize application updates across 100+ servers[cite: 1].

Telephony Platforms: Managed telephony infrastructure and Asterisk services for enterprise SaaS applications (Getdesk, Ringaze, Buel)[cite: 1].

Network Infrastructure: Deployed firewalls, VLAN segmentation, and multi-branch VPN connectivity to guarantee uptime and security[cite: 1].

📫 Contact & Links

Email: faazad66@gmail.com[cite: 1]

Location: Gyaneshwor, Kathmandu, Nepal[cite: 1]

Phone: +977-9843930889[cite: 1]

LinkedIn: linkedin.com/aazad-nath-tharu-b0069b197
